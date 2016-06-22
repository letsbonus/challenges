<?php

namespace AppBundle\Infrastructure\Persistence\Doctrine;

use AppBundle\Domain\Model\Merchant;
use AppBundle\Domain\Model\MerchantRepository as MerchantRepositoryInterface;
use Doctrine\ORM\EntityRepository;

/**
 * Class MerchantRepository
 * @package AppBundle\Infrastructure\Persistence\Doctrine
 */
class MerchantRepository extends EntityRepository implements MerchantRepositoryInterface
{
    /**
     * @param string $name
     * @param string $address
     *
     * @return array
     */
    public function findOneByNameAndAddress($name, $address)
    {
        $em = $this->getEntityManager();

        $query = $em->createQuery('SELECT m FROM AppBundle:Merchant m WHERE m.merchant_name = ?1 AND m.merchant_address = ?2');
        $query->setParameter(1, $name);
        $query->setParameter(2, $address);

        return $query->getOneOrNullResult();
    }

    /**
     * @param Merchant $merchant
     */
    public function persist(Merchant $merchant)
    {
        $em = $this->getEntityManager();

        $em->persist($merchant);
        $em->flush();
    }
}
