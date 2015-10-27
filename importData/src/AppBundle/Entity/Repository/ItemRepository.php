<?php

namespace AppBundle\Entity\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * ItemRepository
 */
class ItemRepository extends EntityRepository
{
    public function getProductPerMonth () {
            $q = $this->getEntityManager()
                ->createQueryBuilder()
                ->select('e, SUBSTRING(e.initDate, 6, 2) as month, COUNT(e) as contador')
                ->from('AppBundle:Item', 'e')
                ->GroupBy('month')
            ;
            return $q->getQuery()->execute();
    }

    public function getProductPerMerchant () {
        $q = $this->getEntityManager()
            ->createQueryBuilder()
            ->select('e.merchantName, COUNT(e) as contador')
            ->from('AppBundle:Item', 'e')
            ->GroupBy('e.merchantName')
        ;
        return $q->getQuery()->execute();
    }
}
