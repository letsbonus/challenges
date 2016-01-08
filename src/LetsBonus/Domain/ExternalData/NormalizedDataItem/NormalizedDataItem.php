<?php

namespace LetsBonus\Domain\ExternalData\NormalizedDataItem;

/**
 * Class NormalizedDataItem
 */
class NormalizedDataItem
{
    /** @var string */
    private $title;

    /** @var string */
    private $description;

    /** @var float */
    private $price;

    /** @var \Datetime */
    private $initDate;

    /** @var \Datetime */
    private $expiryDate;

    /** @var string */
    private $address;

    /** @var string */
    private $name;

    /**
     * @param string $title
     * @param string $description
     * @param float $price
     * @param \Datetime $initDate
     * @param \Datetime $expiryDate
     * @param string $address
     * @param string $name
     */
    public function __construct(
        $title,
        $description,
        $price,
        \Datetime $initDate,
        \Datetime $expiryDate,
        $address,
        $name
    ) {
        $this->title = $title;
        $this->description = $description;
        $this->price = $price;
        $this->initDate = $initDate;
        $this->expiryDate = $expiryDate;
        $this->address = $address;
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function title()
    {
        return $this->title;
    }

    /**
     * @return string
     */
    public function description()
    {
        return $this->description;
    }

    /**
     * @return float
     */
    public function price()
    {
        return $this->price;
    }

    /**
     * @return \Datetime
     */
    public function initDate()
    {
        return $this->initDate;
    }

    /**
     * @return \Datetime
     */
    public function expiryDate()
    {
        return $this->expiryDate;
    }

    /**
     * @return string
     */
    public function address()
    {
        return $this->address;
    }

    /**
     * @return string
     */
    public function name()
    {
        return $this->name;
    }
}
