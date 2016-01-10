<?php

namespace LetsBonus\Application\StoreProductInfo;

/**
 * Class StoreProductInfoUseCaseResponse
 */
class StoreProductInfoUseCaseResponse
{
    /** @var int */
    private $nRows;

    /** @var int */
    private $merchantsCount;

    /** @var int */
    private $productsCount;


    /**
     * @param int $nRows
     * @param int $merchantsCount
     * @param int $productsCount
     */
    public function __construct($nRows, $merchantsCount, $productsCount)
    {
        $this->merchantsCount = $merchantsCount;
        $this->productsCount  = $productsCount;
        $this->nRows          = $nRows;
    }

    /**
     * @return int
     */
    public function nRows()
    {
        return $this->nRows;
    }

    /**
     * @return int
     */
    public function merchantsCount()
    {
        return $this->merchantsCount;
    }

    /**
     * @return int
     */
    public function productsCount()
    {
        return $this->productsCount;
    }
}
