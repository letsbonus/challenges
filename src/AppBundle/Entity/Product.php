<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use datetime;


/**
 * @ORM\Entity
 * @ORM\Table(name="product")
 * @ORM\Entity(repositoryClass="AppBundle\Entity\ProductRepository")
 */
class Product {

    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(name="title", type="string", length=100)
     */
    private $title;

    /**
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @ORM\Column(name="price", type="decimal", scale=2)
     */
    private $price;

    /**
     * @ORM\Column(name="init_date", type="datetime")
     */
    private $init_date;

    /**
     * @ORM\Column(name="expire_date", type="datetime")
     */
    private $expire_date;

    /**
     * @ORM\Column(name="status", type="boolean")
     */
    private $status;

    /**
     * @ORM\Column(name="merchant_address", type="string", length=100)
     */
    private $merchant_address;

    /**
     * @ORM\Column(name="merchant_name", type="string", length=100)
     */
    private $merchant_name;

    /**
     * Get id
     *
     * @return integer
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set title
     *
     * @param string $title
     *
     * @return Product
     */
    public function setTitle($title) {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle() {
        return $this->title;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Product
     */
    public function setDescription($description) {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription() {
        return $this->description;
    }

    /**
     * Set price
     *
     * @param string $price
     *
     * @return Product
     */
    public function setPrice($price) {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return string
     */
    public function getPrice() {
        return $this->price;
    }

    /**
     * Set initDate
     *
     * @param \DateTime $initDate
     *
     * @return Product
     */
    public function setInitDate($initDate) {
        $this->init_date = $initDate;

        return $this;
    }

    /**
     * Get initDate
     *
     * @return \DateTime
     */
    public function getInitDate() {
        return $this->init_date;
    }

    /**
     * Set expireDate
     *
     * @param \DateTime $expireDate
     *
     * @return Product
     */
    public function setExpireDate($expireDate) {
        $this->expire_date = $expireDate;

        return $this;
    }

    /**
     * Get expireDate
     *
     * @return \DateTime
     */
    public function getExpireDate() {
        return $this->expire_date;
    }

    /**
     * Set status
     *
     * @param boolean $status
     *
     * @return Product
     */
    public function setStatus($status) {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return boolean
     */
    public function getStatus() {
        return $this->status;
    }

    /**
     * Set merchantAddress
     *
     * @param boolean $merchantAddress
     *
     * @return Product
     */
    public function setMerchantAddress($merchantAddress) {
        $this->merchant_address = $merchantAddress;

        return $this;
    }

    /**
     * Get merchantAddress
     *
     * @return boolean
     */
    public function getMerchantAddress() {
        return $this->merchant_address;
    }

    /**
     * Set merchantName
     *
     * @param boolean $merchantName
     *
     * @return Product
     */
    public function setMerchantName($merchantName) {
        $this->merchant_name = $merchantName;

        return $this;
    }

    /**
     * Get merchantName
     *
     * @return boolean
     */
    public function getMerchantName() {
        return $this->merchant_name;
    }

}
