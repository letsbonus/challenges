<?php

namespace LetsBonus\Test\Domain\Model\Product;

use LetsBonus\Domain\Model\Merchant\Merchant;
use LetsBonus\Domain\Model\Product\Product;

/**
 * Class FakeProductBuilder
 */
class FakeProductBuilder
{
    public static function build(Merchant $merchant = null)
    {
        $merchant = $merchant ?: new Merchant('name', 'address');

        return new Product('title', 'description', 9.00, new \Datetime(), new \Datetime(), $merchant);
    }

    public static function buildProductForMerchant($merchant)
    {
        return self::build($merchant);
    }
}
