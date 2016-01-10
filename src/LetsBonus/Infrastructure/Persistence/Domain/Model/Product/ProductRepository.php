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
            if (!$this->productExists($product)) {
                $this->getEntityManager()->persist($product);
            }
        }
        $this->getEntityManager()->flush();
    }

    /**
     * @param Product $product
     *
     * @return bool
     */
    private function productExists(Product $product)
    {
        return $this->findBy(['title' => $product->title()]);
    }

    /**
     * @return Product[]
     */
    public function findProductsPerMonth()
    {
        $emConfig = $this->getEntityManager()->getConfiguration();
        $emConfig->addCustomDatetimeFunction('YEAR', 'DoctrineExtensions\Query\Sqlite\Year');
        $emConfig->addCustomDatetimeFunction('MONTH', 'DoctrineExtensions\Query\Sqlite\Month');

        return $this->getEntityManager()
            ->getRepository('LetsBonusDomain:Product\Product')
            ->createQueryBuilder('p')
            ->select('COUNT(1) as number, YEAR(p.initDate) AS year, MONTH(p.initDate) AS month')
            ->groupBy('year')
            ->groupBy('month')
            ->getQuery()
            ->getResult();
    }
}
