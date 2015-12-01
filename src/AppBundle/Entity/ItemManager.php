<?php
/**
 * Created by PhpStorm.
 * User: ismael
 * Date: 1/12/15
 * Time: 3:29
 */

namespace AppBundle\Entity;


use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Query\ResultSetMapping;

class ItemManager
{
    protected $em;

    public function __construct(EntityManager $em)
    {
        $this->em = $em;
    }

    public function GroupedByMonth()
    {
        $rsm = new ResultSetMapping();
        $rsm->addScalarResult('year', 'year');
        $rsm->addScalarResult('month', 'month');
        $rsm->addScalarResult('total', 'total');

        $sql = 'SELECT YEAR(init_date) as year, MONTH(init_date) as month, COUNT(id) AS total FROM item GROUP BY year, month;';

        return $this->em
            ->createNativeQuery($sql, $rsm)
            ->getResult();
    }

    public function GroupedByMerchant()
    {
        $rsm = new ResultSetMapping();
        $rsm->addScalarResult('merchant_name', 'merchant');
        $rsm->addScalarResult('total', 'total');

        $sql = 'SELECT merchant_name, COUNT(id) AS total FROM item GROUP BY merchant_name;';
        return $this->em
            ->createNativeQuery($sql, $rsm)
            ->getResult();
    }

}