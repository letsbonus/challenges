<?php

namespace LetsBonus\Test\Application\StoreProductInfo;

use LetsBonus\Application\StoreProductInfo\StoreProductInfoUseCaseRequest;
use LetsBonus\Domain\Model\Merchant\IMerchantRepository;
use LetsBonus\Domain\Model\Merchant\Merchant;
use LetsBonus\Domain\Model\Product\IProductRepository;
use LetsBonus\Domain\Model\Product\Product;
use LetsBonus\Domain\ExternalData\NormalizedDataItem\NormalizedDataItem;
use LetsBonus\Domain\ExternalData\NormalizedDataItem\Service\INormalizeDataService;
use Mockery;

/**
 * Class StoreProductInfoUseCaseTest
 */
class StoreProductInfoUseCaseTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function itShouldCreateEntitiesWhenDataIsReceived()
    {
        $storeProductInfoUseCase = $this->buildStoreProductInfoUseCase();
        $storeProductInfoUseCaseRequest = $this->buildStoreProductInfoUseCaseRequest();
        $storeProductInfoUseCase->execute($storeProductInfoUseCaseRequest);

        $entitiesContainer = $storeProductInfoUseCase->spyEntitiesContainer();
        $merchants = $entitiesContainer->merchants();
        $products = $entitiesContainer->products();

        $this->assertInstanceOf(Merchant::class, reset($merchants));
        $this->assertInstanceOf(Product::class, reset($products));
    }

    /**
     * @test
     */
    public function itShouldReturnRowsMerchantAndProductsCountWhenDataIsReceived()
    {
        $storeProductInfoUseCase = $this->buildStoreProductInfoUseCase();
        $storeProductInfoUseCaseRequest = $this->buildStoreProductInfoUseCaseRequest();
        $storeProductInfoUseCaseResponse = $storeProductInfoUseCase->execute($storeProductInfoUseCaseRequest);

        $this->assertTrue($storeProductInfoUseCaseResponse->nRows() === 1);
        $this->assertTrue($storeProductInfoUseCaseResponse->merchantsCount() === 1);
        $this->assertTrue($storeProductInfoUseCaseResponse->productsCount() === 1);
    }

    /**
     * @return SpyStoreProductInfoUseCase
     */
    private function buildStoreProductInfoUseCase()
    {
        $normalizeDataService = Mockery::mock(INormalizeDataService::class);
        $merchantRepository = Mockery::mock(IMerchantRepository::class);
        $productRepository = Mockery::mock(IProductRepository::class);

        $normalizeDataService->shouldReceive('normalize')->andReturn($this->buildNormalizedDataItems());
        $merchantRepository->shouldReceive('saveCollection')->andReturn();
        $productRepository->shouldReceive('saveCollection')->andReturn();

        return new SpyStoreProductInfoUseCase(
            $normalizeDataService,
            $merchantRepository,
            $productRepository
        );
    }

    /**
     * @return StoreProductInfoUseCaseRequest
     */
    private function buildStoreProductInfoUseCaseRequest()
    {
        return new StoreProductInfoUseCaseRequest('Request Data is not relevant here, it is in normalizeDataService');
    }

    /**
     * @return NormalizedDataItem[]
     */
    private function buildNormalizedDataItems()
    {
        return [$this->buildNormalizedDataItem()];
    }

    /**
     * @return NormalizedDataItem
     */
    private function buildNormalizedDataItem()
    {
        return new NormalizedDataItem(
            'Reloj Spinnaker Laguna',
            'string ejemplo"',
            99.0,
            new \DateTime('2014-10-01T23:59:59+01:00'),
            new \DateTime('2014-10-07T23:59:59+01:00'),
            'C/Falsa, 123',
            'Joyeria Baguette'
        );
    }
}
