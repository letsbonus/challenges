<?php

namespace Application\GetProductMerchantCount;

use LetsBonus\Application\GetProductMerchantCount\GetProductMerchantCountUseCase;
use LetsBonus\Domain\Model\Merchant\IMerchantRepository;
use LetsBonus\Domain\Model\Merchant\Merchant;
use LetsBonus\Domain\Model\Product\IProductRepository;
use LetsBonus\Domain\Model\Product\Product;
use Mockery;

/**
 * Class GetProductMerchantCountUseCaseTest
 */
class GetProductMerchantCountUseCaseTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function itShouldReturnArrayWithKeysWhenDataWasFound()
    {
        $useCaseResponse = $this->buildGetProductMerchantCountUseCase()->execute();
        $product         = $useCaseResponse->productsPerMerchant();

        $this->assertArrayHasKey('name', reset($product));
        $this->assertArrayHasKey('count', reset($product));
    }

    /**
     * @return GetProductMerchantCountUseCase
     */
    private function buildGetProductMerchantCountUseCase()
    {
        $merchantRepository = Mockery::mock(IMerchantRepository::class);
        $productRepository = Mockery::mock(IProductRepository::class);

        $merchantRepository
            ->shouldReceive('findAll')
            ->andReturn($this->buildFindAllMerchantRepositoryResponse());
        $productRepository
            ->shouldReceive('findProductsPerMonth')
            ->andReturn($this->buildGetProductPerMonthProductRepositoryResponse());

        return new GetProductMerchantCountUseCase($productRepository, $merchantRepository);
    }

    /**
     * @return array
     */
    private function buildFindAllMerchantRepositoryResponse()
    {
        $merchant1 = new Merchant('Joyeria Baguette', 'Address');
        $merchant1
            ->addProduct($this->buildProduct($merchant1))
            ->addProduct($this->buildProduct($merchant1));

        $merchant2 = new Merchant('Deportes Placídia', 'Address2');
        $merchant2->addProduct($this->buildProduct($merchant2));

        return [$merchant1, $merchant2];
    }

    /**
     * @param $merchant1
     *
     * @return Product
     */
    private function buildProduct($merchant1)
    {
        return new Product('title', 'description', 9.00, new \Datetime(), new \Datetime(), $merchant1);
    }

    /**
     * @return array
     */
    private function buildGetProductPerMonthProductRepositoryResponse()
    {
        return [
            [
                'number' => 6,
                'year'   => 2014,
                'month'  => 10
            ]
        ];
    }
}
