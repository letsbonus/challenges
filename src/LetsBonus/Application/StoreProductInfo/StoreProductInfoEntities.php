<?php

namespace LetsBonus\Application\StoreProductInfo;

use LetsBonus\Domain\Model\Merchant\Merchant;
use LetsBonus\Domain\Model\Product\Product;

/**
 * Class StoreProductInfoEntities
 */
class StoreProductInfoEntities
{
    /** @var Product[] */
    private $products;

    /** @var Merchant[] */
    private $merchants;

    public function __construct()
    {
        $this->products = [];
        $this->merchants = [];
    }

    /**
     * @param Product $product
     */
    public function addProduct(Product $product)
    {
        if (!isset($this->products[$product->title()])) {
            $this->products[$product->title()] = $product;
        }
    }

    /**
     * @param Merchant $merchant
     *
     * @return Merchant
     */
    public function addMerchant(Merchant $merchant)
    {
        if (!isset($this->merchants[$merchant->name()])) {
            $this->merchants[$merchant->name()] = $merchant;

        }

        return $this->merchants[$merchant->name()];
    }

    /**
     * @return Product[]
     */
    public function products()
    {
        return $this->products;
    }

    /**
     * @return Merchant[]
     */
    public function merchants()
    {
        return $this->merchants;
    }
}
