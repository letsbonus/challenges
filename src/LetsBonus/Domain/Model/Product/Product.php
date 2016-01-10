<?php

namespace LetsBonus\Domain\Model\Product;

use LetsBonus\Domain\Assertion;
use LetsBonus\Domain\Identifier;

/**
 * Class Product
 */
class Product
{
    /** @var string */
    private $id;

    /** @var string */
    private $title;

    /** @var string */
    private $description;

    /** @var float */
    private $price;

    /** @var \DateTime */
    private $initDate;

    /** @var \DateTime */
    private $expiryDate;

    /**
     * @param string    $title
     * @param string    $description
     * @param float     $price
     * @param \DateTime $initDate
     * @param \DateTime $expiryDate
     */
    public function __construct($title, $description, $price, \DateTime $initDate, \DateTime $expiryDate)
    {
        $this->id = Identifier::createIdentity();
        $this->setTitle($title);
        $this->setDescription($description);
        $this->setPrice($price);
        $this->setInitDate($initDate);
        $this->setExpiryDate($expiryDate);
    }

    /**
     * @return string
     */
    public function id()
    {
        return $this->id;
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
     * @return \DateTime
     */
    public function initDate()
    {
        return $this->initDate;
    }

    /**
     * @return \DateTime
     */
    public function expiryDate()
    {
        return $this->expiryDate;
    }

    /**
     * @param $title
     */
    private function setTitle($title)
    {
        Assertion::notBlank($title, 'Title is required');
        Assertion::string($title, 'Title should be string type');
        $this->title = $title;
    }

    /**
     * @param $price
     */
    private function setPrice($price)
    {
        Assertion::float($price, 'Price must be a float value');
        $this->price = $price;
    }

    /**
     * @param $description
     */
    private function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @param \DateTime $initDate
     */
    private function setInitDate(\DateTime $initDate)
    {
        $this->initDate = $initDate;
    }

    /**
     * @param \DateTime $expiryDate
     */
    private function setExpiryDate(\DateTime $expiryDate)
    {
        $this->expiryDate = $expiryDate;
    }
}
