<?php

namespace LetsBonus\Application\StoreProductInfo;

use LetsBonus\Application\IUseCase;
use LetsBonus\Application\IUseCaseRequest;
use LetsBonus\Domain\Core\Merchant\IMerchantRepository;
use LetsBonus\Domain\Core\Merchant\Merchant;
use LetsBonus\Domain\Core\Product\IProductRepository;
use LetsBonus\Domain\Core\Product\Product;
use LetsBonus\Domain\ExternalData\NormalizedDataItem\NormalizedDataItem;
use LetsBonus\Domain\ExternalData\NormalizedDataItem\Service\INormalizeDataService;
use LetsBonus\Domain\ExternalData\NormalizedDataItem\Service\NormalizeDataServiceRequest;

/**
 * Class StoreProductInfoUseCase
 */
class StoreProductInfoUseCase implements IUseCase
{
    /** @var INormalizeDataService */
    private $normalizeDataService;

    /** @var IMerchantRepository */
    private $merchantRepository;

    /** @var IProductRepository */
    private $productRepository;

    /**
     * @param INormalizeDataService $normalizeDataService
     * @param IMerchantRepository   $merchantRepository
     * @param IProductRepository    $productRepository
     */
    public function __construct(
        INormalizeDataService $normalizeDataService,
        IMerchantRepository $merchantRepository,
        IProductRepository $productRepository
    ) {
        $this->normalizeDataService = $normalizeDataService;
        $this->merchantRepository = $merchantRepository;
        $this->productRepository = $productRepository;
    }

    /**
     * @param IUseCaseRequest|StoreProductInfoUseCaseRequest $request
     *
     * @return StoreProductInfoUseCaseResponse
     */
    public function execute(IUseCaseRequest $request)
    {
        $normalizedData = $this->normalizeDataService->normalize(
            new NormalizeDataServiceRequest($request->uploadFileContent())
        );

        $this->storeProductsInfo($normalizedData);
    }

    /**
     * @param NormalizedDataItem[] $normalizedData
     */
    private function storeProductsInfo($normalizedData)
    {
        $entities = $this->buildEntitiesToStore($normalizedData);

        $this->saveMerchants($entities->merchants());
        $this->saveProducts($entities->products());
    }

    /**
     * @param $normalizedData
     *
     * @return StoreProductInfoEntities
     */
    protected function buildEntitiesToStore($normalizedData)
    {
        $entitiesContainer = new StoreProductInfoEntities();
        foreach ($normalizedData as $normalizedDataItem) {
            $this->buildEntitiesFromNormalizedData($entitiesContainer, $normalizedDataItem);
        }

        return $entitiesContainer;
    }

    /**
     * @param StoreProductInfoEntities $entitiesContainer
     * @param NormalizedDataItem       $normalizedDataItem
     */
    private function buildEntitiesFromNormalizedData(
        StoreProductInfoEntities $entitiesContainer,
        NormalizedDataItem $normalizedDataItem
    ) {
        $entitiesContainer->addProduct($this->buildProduct($normalizedDataItem));
        $entitiesContainer->addMerchant($this->buildMerchant($normalizedDataItem));
    }

    /**
     * @param NormalizedDataItem $normalizedDataItem
     *
     * @return Product
     */
    private function buildProduct(NormalizedDataItem $normalizedDataItem)
    {
        return new Product(
            $normalizedDataItem->title(),
            $normalizedDataItem->description(),
            $normalizedDataItem->price(),
            $normalizedDataItem->initDate(),
            $normalizedDataItem->expiryDate()
        );
    }

    /**
     * @param NormalizedDataItem $normalizedDataItem
     *
     * @return Merchant
     */
    private function buildMerchant(NormalizedDataItem $normalizedDataItem)
    {
        return new Merchant($normalizedDataItem->name(), $normalizedDataItem->address());
    }

    /**
     * @param Merchant[] $merchants
     */
    public function saveMerchants($merchants)
    {
        $this->merchantRepository->saveCollection($merchants);
    }

    /**
     * @param Product[] $products
     */
    public function saveProducts($products)
    {
        $this->productRepository->saveCollection($products);
    }
}
