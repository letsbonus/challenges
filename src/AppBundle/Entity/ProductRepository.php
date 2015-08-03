<?php

namespace AppBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * ProductRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ProductRepository extends EntityRepository
{
    public function getTotalPerMerchantName(){
        $em = $this->getEntityManager();
        
        $query = $em->getConnection()
                    ->prepare('select count(*) as `total`, `merchant_name` from `product` group by `merchant_name` order by `merchant_name` ASC ');
        
        $query->execute();
        $result = $query->fetchAll();      
        
        return $result;
    }
}
