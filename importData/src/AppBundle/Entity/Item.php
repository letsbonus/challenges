<?php

namespace AppBundle\Entity;

use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;


/**
 * Item
 *
 * @ORM\Table(name="item")
 * @ORM\Entity()
 */
class Item
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue
     */
    private $id;

    /**
     * @ORM\Column(length=64)
     */
    private $title;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $description;

    /**
     * @ORM\Column(type="decimal", scale=2, nullable=false)
     */
    protected $price;

    /**
     * @ORM\Column(type="datetime")
     */
    private $initDate;

    /**
     * @ORM\Column(type="datetime")
     */
    private $expiryDate;

    /**
     * @ORM\Column(length=255)
     */
    private $merchantAddress;

    /**
     * @ORM\Column(length=255)
     */
    private $merchantName;

    /**
     * @ORM\Column(name="status", type="boolean", nullable=true)
     */
    protected $status = true;

    /**
     * @return string
     */
    public function __toString()
    {
        return (!$this->title) ? 'Nuevo item' : $this->title;
    }



    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set title
     *
     * @param string $title
     *
     * @return Item
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Item
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set initDate
     *
     * @param \DateTime $initDate
     *
     * @return Item
     */
    public function setInitDate($initDate)
    {
        $this->initDate = $initDate;

        return $this;
    }

    /**
     * Get initDate
     *
     * @return \DateTime
     */
    public function getInitDate()
    {
        return $this->initDate;
    }

    /**
     * Set expiryDate
     *
     * @param \DateTime $expiryDate
     *
     * @return Item
     */
    public function setExpiryDate($expiryDate)
    {
        $this->expiryDate = $expiryDate;

        return $this;
    }

    /**
     * Get expiryDate
     *
     * @return \DateTime
     */
    public function getExpiryDate()
    {
        return $this->expiryDate;
    }

    /**
     * Set merchantAddress
     *
     * @param string $merchantAddress
     *
     * @return Item
     */
    public function setMerchantAddress($merchantAddress)
    {
        $this->merchantAddress = $merchantAddress;

        return $this;
    }

    /**
     * Get merchantAddress
     *
     * @return string
     */
    public function getMerchantAddress()
    {
        return $this->merchantAddress;
    }

    /**
     * Set merchantName
     *
     * @param string $merchantName
     *
     * @return Item
     */
    public function setMerchantName($merchantName)
    {
        $this->merchantName = $merchantName;

        return $this;
    }

    /**
     * Get merchantName
     *
     * @return string
     */
    public function getMerchantName()
    {
        return $this->merchantName;
    }

    /**
     * Set status
     *
     * @param boolean $status
     *
     * @return Item
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return boolean
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set price
     *
     * @param string $price
     *
     * @return Item
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return string
     */
    public function getPrice()
    {
        return $this->price;
    }
}
