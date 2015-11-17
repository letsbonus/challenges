<?php

namespace AppBundle\Entity\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * Description of ProductRepository
 *
 * @author hernan
 */
class ProductRepository extends EntityRepository {


    public function getProductsPerMonth() {       
        /* SELECT month(initDate), count(*) FROM letsbonus.product
        GROUP BY month(initDate); */

        $qb = $this->getEntityManager()->createQueryBuilder();

        $qb->select("month(p.initDate) as initMonth, count(p) as productCount")
                ->from("AppBundle:Product", "p")
                ->groupBy("initMonth");

        $result = $qb->getQuery()->getResult();

        return $result;
    }

    public function getProductsPerMerchant() {
        /*SELECT merchantName, count(*) FROM letsbonus.product
        GROUP BY merchantName;*/
        
        $qb = $this->getEntityManager()->createQueryBuilder();

        $qb->select("p.merchantName as merchantName, count(p) as productCount")
                ->from("AppBundle:Product", "p")
                ->groupBy("merchantName");

        $result = $qb->getQuery()->getResult();

        return $result;
    }

}
