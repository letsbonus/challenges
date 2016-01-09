<?php

namespace LetsBonus\Domain\Core\Product;

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
