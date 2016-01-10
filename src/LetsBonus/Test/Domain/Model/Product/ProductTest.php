<?php

namespace LetsBonus\Test\Domain\Model\Product;
use LetsBonus\Domain\Assertion;
use LetsBonus\Domain\Model\Merchant\Merchant;
use LetsBonus\Domain\Model\Product\Product;

/**
 * Class ProductTest
 */
class ProductTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function itShouldHasUuidIdentifier()
    {
        $product = FakeProductBuilder::build();
        Assertion::uuid($product->id());
    }

    /**
     * @test
     */
    public function itShouldThrowExceptionWhenProductHasEmptyTitle()
    {
        $this->setExpectedException(\InvalidArgumentException::class);
        $merchant = new Merchant('name', 'address');
        new Product('', 'description', 9.00, new \Datetime(), new \Datetime(), $merchant);
    }

    /**
     * @test
     */
    public function itShouldThrowExceptionWhenProductHasEmptyPrice()
    {
        $this->setExpectedException(\InvalidArgumentException::class);
        $merchant = new Merchant('name', 'address');
        new Product('Name', 'description', '', new \Datetime(), new \Datetime(), $merchant);
    }
}
