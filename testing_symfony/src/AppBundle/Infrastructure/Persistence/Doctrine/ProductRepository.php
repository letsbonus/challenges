<?php

namespace AppBundle\Infrastructure\Persistence\Doctrine;

use AppBundle\Domain\Model\Product;
use AppBundle\Domain\Model\ProductRepository as ProductRepositoryInterface;
use Doctrine\ORM\EntityRepository;

/**
 * Class ProductRepository
 * @package AppBundle\Infrastructure\Persistence\Doctrine
 */
class ProductRepository extends EntityRepository implements ProductRepositoryInterface
{
    public function findAllOrderedByTitle()
    {
        return $this->getEntityManager()
            ->createQuery(
                'SELECT p FROM AppBundle:Product m ORDER BY p.title ASC'
            )
            ->getResult();
    }

    /**
     * @param Product $product
     */
    public function persist(Product $product)
    {
        $em = $this->getEntityManager();

        $em->persist($product);
        $em->flush();
    }
}
