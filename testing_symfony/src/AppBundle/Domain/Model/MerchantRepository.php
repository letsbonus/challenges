<?php

namespace AppBundle\Domain\Model;

interface MerchantRepository
{
    /**
     * @param string $name
     * @param string $address
     *
     * @return array
     */
    public function findOneByNameAndAddress($name, $address);

    /**
     * @param Merchant $merchant
     */
    public function persist(Merchant $merchant);
}