<?php

namespace AppBundle\Application\Handler\Command;

class MerchantCommand
{
    /** @var  string */
    protected $merchant_address;
    /** @var  string */
    protected $merchant_name;

    /**
     * MerchantRequest constructor.
     * @param array $merchantData
     */
    public function __construct(array $merchantData)
    {
        foreach ($merchantData as $merchantProperty => $merchantValue) {
            $this->$merchantProperty = $merchantValue;
        }
    }

    /**
     * @return string
     */
    public function merchantAddress()
    {
        return $this->merchant_address;
    }

    /**
     * @return string
     */
    public function merchantName()
    {
        return $this->merchant_name;
    }
}