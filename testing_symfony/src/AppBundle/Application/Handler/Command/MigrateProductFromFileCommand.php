<?php

namespace AppBundle\Application\Handler\Command;

use AppBundle\Domain\Model\Merchant;
use AppBundle\Domain\Model\MerchantRepository;
use AppBundle\Domain\Model\Product;
use AppBundle\Domain\Model\ProductRepository;

class MigrateProductFromFileCommand extends Command
{
    /** @var  ProductRepository */
    private $productRepository;

    /** @var  MerchantRepository */
    private $merchantRepository;

    public function __construct(ProductRepository $productRepository, MerchantRepository $merchantRepository)
    {
        $this->productRepository = $productRepository;
        $this->merchantRepository = $merchantRepository;
    }

    /**
     * @param null|MigrateProductCommand $request
     *
     * @return mixed
     */
    public function execute($request = null)
    {
        $this->checkRequest($request);

        $fData = fopen($request->file(), 'r');
        $fieldTitles = explode("\t", str_replace(' ', '_', fgets($fData)));
        $this->readDataAndMigrate($fData, $fieldTitles);
    }

    /**
     * @return string
     */
    public function getRequestClass()
    {
        return MigrateProductCommand::class;
    }

    /**
     * @param resource $fData
     * @param array $fieldTitles
     */
    private function readDataAndMigrate($fData, $fieldTitles)
    {
        while ($row = fgets($fData)) {
            $productData = explode("\t", $row);
            $dataRequest = new DataCommand($productData, $fieldTitles);
            $this->buildAndPersistProduct(
                $dataRequest,
                $this->buildAndPersistIfNotExistDomainMerchant($dataRequest)
            );
        }
    }

    /**
     * @param DataCommand $dataRequest
     *
     * @return array|null
     */
    private function findMerchant(DataCommand $dataRequest)
    {
        return $this->merchantRepository->findOneByNameAndAddress(
            $dataRequest->merchantRequest()->merchantName(),
            $dataRequest->merchantRequest()->merchantAddress()
        );
    }

    /**
     * @param DataCommand $dataRequest
     * @return Merchant
     */
    private function buildAndPersistIfNotExistDomainMerchant($dataRequest)
    {
        $merchant = $this->findMerchant($dataRequest);

        if (is_null($merchant)) {
            $domainMerchant = new Merchant($dataRequest->merchantRequest());
            $this->merchantRepository->persist($domainMerchant);

            return $domainMerchant;
        } else {
            return $merchant;
        }
    }

    /**
     * @param DataCommand $dataRequest
     * @param Merchant $domainMerchant
     */
    private function buildAndPersistProduct($dataRequest, $domainMerchant)
    {
        $domainProduct = new Product($dataRequest->productRequest(), $domainMerchant);
        $this->productRepository->persist($domainProduct);
    }
}