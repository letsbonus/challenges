<?php

namespace LetsBonus\Application\GetProductMerchantCount;

use LetsBonus\Application\IUseCase;
use LetsBonus\Application\IUseCaseRequest;
use LetsBonus\Domain\Model\Merchant\IMerchantRepository;
use LetsBonus\Domain\Model\Product\IProductRepository;

/**
 * Class GetProductMerchantCountUseCase
 */
class GetProductMerchantCountUseCase implements IUseCase
{
    /** @var IProductRepository */
    private $productRepository;

    /** @var IMerchantRepository */
    private $merchantRepository;

    /**
     * @param IProductRepository  $productRepository
     * @param IMerchantRepository $merchantRepository
     */
    public function __construct(IProductRepository $productRepository, IMerchantRepository $merchantRepository)
    {
        $this->productRepository  = $productRepository;
        $this->merchantRepository = $merchantRepository;
    }

    /**
     * @param IUseCaseRequest $request
     *
     * @return GetProductMerchantCountUseCaseResponse
     */
    public function execute(IUseCaseRequest $request = null)
    {
        return new GetProductMerchantCountUseCaseResponse(
            $this->getProductPerMonth(),
            $this->getProductPerMerchant()
        );
    }

    /**
     * @return array
     */
    private function getProductPerMonth()
    {
        return $this->productRepository->findProductsPerMonth();
    }

    /**
     * @return array
     */
    private function getProductPerMerchant()
    {
        $merchants = $this->merchantRepository->findAll();
        $result = [];
        foreach ($merchants as $merchant) {
            $result[$merchant->id()] = [
                'name' => $merchant->name(),
                'count' => count($merchant->products())
            ];
        }

        return $result;
    }
}
