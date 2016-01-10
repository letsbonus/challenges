<?php

namespace LetsBonus\Test\Domain\Model\Merchant;

use LetsBonus\Domain\Assertion;
use LetsBonus\Domain\Model\Merchant\Merchant;
use LetsBonus\Domain\Model\Product\ProductAlreadyExistsException;
use LetsBonus\Test\Domain\Model\Product\FakeProductBuilder;
use Ramsey\Uuid\Uuid;

/**
 * Class MerchantTest
 */
class MerchantTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function itShouldThrowProductAlreadyExistsExceptionWhenAddAProductThatExists()
    {
        $this->setExpectedException(ProductAlreadyExistsException::class);

        $merchant1 = new Merchant('Joyeria Baguette', 'Address');
        $product = FakeProductBuilder::buildProductForMerchant($merchant1);

        $merchant1
            ->addProduct($product)
            ->addProduct($product);
    }

    /**
     * @test
     */
    public function itShouldHasUuidIdentifier()
    {
        $merchant = new Merchant('Joyeria Baguette', 'Address');
        Assertion::uuid($merchant->id());
    }

    /**
     * @test
     */
    public function itShouldThrowExceptionWhenMerchantHasEmptyName()
    {
        $this->setExpectedException(\InvalidArgumentException::class);
        new Merchant('', 'Address');
    }

    /**
     * @test
     */
    public function itShouldThrowExceptionWhenMerchantNameIsNul()
    {
        $this->setExpectedException(\InvalidArgumentException::class);
        new Merchant(null, 'Address');
    }
}
