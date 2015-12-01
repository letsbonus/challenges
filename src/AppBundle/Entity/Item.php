<?php
/**
 * Created by PhpStorm.
 * User: ismael
 * Date: 30/11/15
 * Time: 14:29.
 */
namespace AppBundle\Entity;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="item")
 */
class Item
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $title;

    /**
     * @ORM\Column(type="text")
     */
    private $description;

    /**
     * @ORM\Column(type="decimal", precision=2, scale=2)
     */
    private $price;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $init_date;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $expiry_date;

    /**
     * @ORM\Column(type="string", length=31)
     */
    private $status;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $merchant_name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $merchant_address;

    /**
     * @ORM\Column(type="datetime")
     */
    private $created_at;

    /**
     * Item constructor.
     */
    public function __construct()
    {
        $this->created_at = new \DateTime();
        $this->status = 'created';
    }

    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set title.
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
     * Get title.
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set description.
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
     * Get description.
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set price.
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
     * Get price.
     *
     * @return string
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set initDate.
     *
     * @param \DateTime $initDate
     *
     * @return Item
     */
    public function setInitDate($initDate)
    {
        $this->init_date = $initDate;

        return $this;
    }

    /**
     * Get initDate.
     *
     * @return \DateTime
     */
    public function getInitDate()
    {
        return $this->init_date;
    }

    /**
     * Set expiryDate.
     *
     * @param \DateTime $expiryDate
     *
     * @return Item
     */
    public function setExpiryDate($expiryDate)
    {
        $this->expiry_date = $expiryDate;

        return $this;
    }

    /**
     * Get expiryDate.
     *
     * @return \DateTime
     */
    public function getExpiryDate()
    {
        return $this->expiry_date;
    }

    /**
     * Set status.
     *
     * @param string $status
     *
     * @return Item
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status.
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set createdAt.
     *
     * @param \DateTime $createdAt
     *
     * @return Item
     */
    public function setCreatedAt($createdAt)
    {
        $this->created_at = $createdAt;

        return $this;
    }

    /**
     * Get createdAt.
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     * Set merchantName.
     *
     * @param string $merchantName
     *
     * @return Item
     */
    public function setMerchantName($merchantName)
    {
        $this->merchant_name = $merchantName;

        return $this;
    }

    /**
     * Get merchantName.
     *
     * @return string
     */
    public function getMerchantName()
    {
        return $this->merchant_name;
    }

    /**
     * Set merchantAddress.
     *
     * @param string $merchantAddress
     *
     * @return Item
     */
    public function setMerchantAddress($merchantAddress)
    {
        $this->merchant_address = $merchantAddress;

        return $this;
    }

    /**
     * Get merchantAddress.
     *
     * @return string
     */
    public function getMerchantAddress()
    {
        return $this->merchant_address;
    }
}
