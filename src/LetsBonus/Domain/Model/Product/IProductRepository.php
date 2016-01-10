<?php

namespace LetsBonus\Domain\Model\Product;

/**
 * Interface IProductRepository
 */
interface IProductRepository
{
    /**
     * @param Product[] $products
     */
    public function saveCollection($products);
}
