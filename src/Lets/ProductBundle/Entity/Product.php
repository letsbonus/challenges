<?php

namespace Lets\ProductBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Product
 *
 * @ORM\Table(name="product")
 * @ORM\Entity(repositoryClass="Lets\ProductBundle\Entity\ProductRepository")
 */
class Product
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     * @Assert\NotBlank()
     * @ORM\Column(name="item_title", type="string", length=255)
     */
    private $itemTitle;

    /**
     * @var string
     *
     * @ORM\Column(name="item_description", type="text")
     */
    private $itemDescription;

    /**
     * @var string
     * @Assert\NotBlank()
     * @ORM\Column(name="item_price", type="decimal", precision=10, scale=2)
     */
    private $itemPrice;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="item_init_date_at", type="datetime")
     */
    private $itemInitDateAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="item_expiry_date_at", type="datetime")
     */
    private $itemExpiryDateAt;

    /**
     * @var string
     *
     * @ORM\Column(name="merchant_address", type="string", length=255)
     */
    private $merchantAddress;

    /**
     * @var string
     *
     * @ORM\Column(name="merchant_name", type="string", length=255)
     */
    private $merchantName;


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
     * Set itemTitle
     *
     * @param string $itemTitle
     *
     * @return Product
     */
    public function setItemTitle($itemTitle)
    {
        $this->itemTitle = $itemTitle;

        return $this;
    }

    /**
     * Get itemTitle
     *
     * @return string
     */
    public function getItemTitle()
    {
        return $this->itemTitle;
    }

    /**
     * Set itemDescription
     *
     * @param string $itemDescription
     *
     * @return Product
     */
    public function setItemDescription($itemDescription)
    {
        $this->itemDescription = $itemDescription;

        return $this;
    }

    /**
     * Get itemDescription
     *
     * @return string
     */
    public function getItemDescription()
    {
        return $this->itemDescription;
    }

    /**
     * Set itemPrice
     *
     * @param string $itemPrice
     *
     * @return Product
     */
    public function setItemPrice($itemPrice)
    {
        $this->itemPrice = $itemPrice;

        return $this;
    }

    /**
     * Get itemPrice
     *
     * @return string
     */
    public function getItemPrice()
    {
        return $this->itemPrice;
    }

    /**
     * Set itemInitDateAt
     *
     * @param \DateTime|string $itemInitDateAt
     *
     * @return Product
     */
    public function setItemInitDateAt($itemInitDateAt)
    {
        $this->itemInitDateAt = ($itemInitDateAt instanceof \DateTime)
            ? $itemInitDateAt
            : new \DateTime($itemInitDateAt);

        return $this;
    }

    /**
     * Get itemInitDateAt
     *
     * @return \DateTime
     */
    public function getItemInitDateAt()
    {
        return $this->itemInitDateAt;
    }

    /**
     * Set itemExpiryDateAt
     *
     * @param \DateTime|string $itemExpiryDateAt
     *
     * @return Product
     */
    public function setItemExpiryDateAt($itemExpiryDateAt)
    {
        $this->itemExpiryDateAt = ($itemExpiryDateAt instanceof \DateTime)
            ? $itemExpiryDateAt
            : new \DateTime($itemExpiryDateAt);

        return $this;
    }

    /**
     * Get itemExpiryDateAt
     *
     * @return \DateTime
     */
    public function getItemExpiryDateAt()
    {
        return $this->itemExpiryDateAt;
    }

    /**
     * Set merchantAddress
     *
     * @param string $merchantAddress
     *
     * @return Product
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
     * @return Product
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
     * Generate new product from array
     *
     * @param array $productArray
     *
     * @return Product
     */
    public static function import(array $productArray)
    {
        return (new self())
            ->setItemTitle(isset($productArray["item title"]) ? $productArray["item title"] : null)
            ->setItemDescription(isset($productArray["item description"]) ? $productArray["item description"] : null)
            ->setItemPrice(isset($productArray["item price"]) ? $productArray["item price"] : null)
            ->setItemInitDateAt(isset($productArray["item init date"]) ? $productArray["item init date"] : null)
            ->setItemExpiryDateAt(isset($productArray["item expiry date"]) ? $productArray["item expiry date"] : null)
            ->setMerchantAddress(isset($productArray["merchant address"]) ? $productArray["merchant address"] : null)
            ->setMerchantName(isset($productArray["merchant name"]) ? $productArray["merchant name"] : null)
            ;
    }
}

