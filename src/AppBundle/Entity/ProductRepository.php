<?php

namespace AppBundle\Entity;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Query\ResultSetMapping;

class ProductRepository extends EntityRepository {

    /**
     * Get number of prodcut by month
     * @return type
     */
    public function findAllNumberProductsByMonth() {
        
        //la query en mysql es:
        // SELECT COUNT(1), DATE_FORMAT(init_date, '%m/%Y') FROM letsbonus.product GROUP BY MONTH(init_date);
        // pero para ejecutar los "MONTH" y "YEAR" se tienenq ue instalar las "doctrine extension" que no he querido hacer para esta prueba       
        $results = $this->getEntityManager()->createQuery('SELECT count(1), p.init_date FROM AppBundle:Product p GROUP BY p.init_date')->getResult();
        
        $number_products = array();
        foreach ($results as $key=>$result) {
            $number_products[$key]['number'] = $result[1];
            $number_products[$key]['date'] = $result['init_date'];
        }
        
        return $number_products;
    }

    /**
     * Get number of produts by merchant name
     * @return type
     */
    public function findAllProductsByMerchant() {
        return $this->getEntityManager()->createQuery('SELECT COUNT(1) as number, p.merchant_name FROM AppBundle:Product p GROUP BY p.merchant_name')->getResult();
    }
    
}
