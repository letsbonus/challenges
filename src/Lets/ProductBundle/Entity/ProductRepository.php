<?php

namespace Lets\ProductBundle\Entity;

/**
 * Class ProductRepository
 *
 * @package Lets\ProductBundle\Entity
 */
class ProductRepository extends \Doctrine\ORM\EntityRepository
{

    /**
     * Count product by month
     *
     * @return array
     * @throws \Doctrine\DBAL\DBALException
     */
    public function countByMonth()
    {

        // That's Better with queryBuilder

        $sql = "SELECT MONTHNAME(item_init_date_at) as monthName, COUNT(id) as productCount FROM product GROUP BY month(item_init_date_at)";

        $conn  = $this->getEntityManager()->getConnection()->prepare($sql);
        $conn->execute();

        return $conn->fetchAll();

    }

    /**
     * Count product by merchant
     *
     * @return array
     * @throws \Doctrine\DBAL\DBALException
     */
    public function countByMerchant()
    {

        $sql = "SELECT merchant_name, COUNT(id) as productCount FROM product GROUP BY merchant_name";

        $conn  = $this->getEntityManager()->getConnection()->prepare($sql);
        $conn->execute();

        $result = $conn->fetchAll();

        return $result;

    }
}
