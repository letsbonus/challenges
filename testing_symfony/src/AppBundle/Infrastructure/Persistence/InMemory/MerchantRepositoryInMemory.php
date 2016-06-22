<?php

namespace AppBundle\Infrastructure\Persistence\InMemory;

use AppBundle\Application\Handler\Command\MerchantCommand;
use AppBundle\Domain\Model\Merchant;
use AppBundle\Domain\Model\MerchantRepository;

class MerchantRepositoryInMemory implements MerchantRepository
{
    public function findOneByNameAndAddress($name, $address)
    {
        $merchantCommand = new MerchantCommand(
            [
                'merchant_name' => 'MerchantNameTest',
                'merchant_address' => 'MerchantAddressTest'
            ]);
        return new Merchant($merchantCommand);
    }

    public function persist(Merchant $merchant)
    {
        return true;
    }
}