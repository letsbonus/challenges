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

    /**
     * @return Product[]
     */
    public function findProductsPerMonth();
}
