<?php

namespace LetsBonus\Infrastructure\Persistence\Domain\Model\Product;

use Doctrine\ORM\EntityRepository;
use LetsBonus\Domain\Model\Product\IProductRepository;
use LetsBonus\Domain\Model\Product\Product;

/**
 * Class ProductRepository
 */
class ProductRepository extends EntityRepository implements IProductRepository
{
    /**
     * @param Product[] $products
     */
    public function saveCollection($products)
    {
        foreach ($products as $product) {
            $this->getEntityManager()->persist($product);
        }
        $this->getEntityManager()->flush();
    }
}
