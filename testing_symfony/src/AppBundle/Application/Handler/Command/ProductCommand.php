<?php

namespace AppBundle\Application\Handler\Command;

use DateTime;

class ProductCommand
{
    /** @var  string */
    private $item_title;
    /** @var  string */
    private $item_description;
    /** @var  float */
    private $item_price;
    /** @var  DateTime */
    private $item_init_date;
    /** @var  DateTime */
    private $item_expiry_date;
    /** @var  int */
    private $status;

    /**
     * ProductCommand constructor.
     * @param array $productData
     */
    public function __construct(array $productData)
    {
        foreach ($productData as $productKey => $productItem) {
            $productSetterMethod = "set_{$productKey}";
            $this->$productSetterMethod($productItem);
        }
        $this->status = 1;
    }

    /**
     * @return string
     */
    public function title()
    {
        return $this->item_title;
    }

    /**
     * @param string $item_title
     */
    private function set_item_title($item_title)
    {
        $this->item_title = $item_title;
    }

    /**
     * @return string
     */
    public function description()
    {
        return $this->item_description;
    }

    /**
     * @param string $item_description
     */
    private function set_item_description($item_description)
    {
        $this->item_description = $item_description;
    }

    /**
     * @return float
     */
    public function price()
    {
        return $this->item_price;
    }

    /**
     * @param float $item_price
     */
    private function set_item_price($item_price)
    {
        $this->item_price = $item_price;
    }

    /**
     * @return DateTime
     */
    public function initDate()
    {
        return $this->item_init_date;
    }

    /**
     * @param DateTime $item_init_date
     */
    private function set_item_init_date($item_init_date)
    {
        $this->item_init_date = $this->buildDateTimeFromString($item_init_date);
    }

    /**
     * @return DateTime
     */
    public function expiryDate()
    {
        return $this->item_expiry_date;
    }

    /**
     * @param DateTime $item_expiry_date
     */
    private function set_item_expiry_date($item_expiry_date)
    {
        $this->item_expiry_date = $this->buildDateTimeFromString($item_expiry_date);
    }

    /**
     * @return int
     */
    public function status()
    {
        return $this->status;
    }

    /**
     * @param string $dateString
     * @return DateTime
     */
    private function buildDateTimeFromString($dateString)
    {
        $initDate = new DateTime();

        if (is_string($dateString)) {
            $dateTime = explode('T', $dateString);
            $date = explode('-', $dateTime[0]);
            $time = explode(':', substr($dateTime[1], 0, (strpos($dateTime[1], '+') - 1)));
            $initDate->setDate($date[0], $date[1], $date[2]);
            $initDate->setTime($time[0], $time[1], $time[2]);
        }

        return $initDate;
    }
}