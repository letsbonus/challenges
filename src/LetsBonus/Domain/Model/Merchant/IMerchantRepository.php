<?php

namespace LetsBonus\Domain\Model\Merchant;

/**
 * Interface IMerchantRepository
 */
interface IMerchantRepository
{
    /**
     * @param Merchant[] $merchants
     */
    public function saveCollection($merchants);

    /**
     * @return Merchant[]
     */
    public function findAll();
}
