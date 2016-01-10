<?php

namespace LetsBonus\Application\GetProductMerchantCount;

/**
 * Class GetProductMerchantCountUseCaseResponse
 */
class GetProductMerchantCountUseCaseResponse
{
    /** @var array */
    private $productsPerMonth;

    /** @var array */
    private $productsPerMerchant;

    /**
     * @param array $productsPerMonth
     * @param array $productsPerMerchant
     */
    public function __construct($productsPerMonth, $productsPerMerchant)
    {
        $this->productsPerMonth    = $productsPerMonth;
        $this->productsPerMerchant = $productsPerMerchant;
    }

    /**
     * @return array
     */
    public function productsPerMonth()
    {
        return $this->productsPerMonth;
    }

    /**
     * @return array
     */
    public function productsPerMerchant()
    {
        return $this->productsPerMerchant;
    }
}
