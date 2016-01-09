<?php

namespace LetsBonus\Domain\Core\Merchant;

/**
 * Interface IMerchantRepository
 */
interface IMerchantRepository
{
    /**
     * @param Merchant[] $merchants
     */
    public function saveCollection($merchants);
}
