<?php

namespace AppBundle\Domain\Model;

interface ProductRepository
{
    public function findAllOrderedByTitle();

    /**
     * @param Product $product
     */
    public function persist(Product $product);
}