<?php

namespace LetsBonus\Infrastructure\Persistence\Domain\Model\Merchant;

use Doctrine\ORM\EntityRepository;
use LetsBonus\Domain\Model\Merchant\IMerchantRepository;
use LetsBonus\Domain\Model\Merchant\Merchant;

/**
 * Class MerchantRepository
 */
class MerchantRepository extends EntityRepository implements IMerchantRepository
{
    /**
     * @param Merchant[] $merchants
     */
    public function saveCollection($merchants)
    {
        foreach ($merchants as $merchant) {
            $this->getEntityManager()->persist($merchant);
        }
        $this->getEntityManager()->flush();
    }
}
