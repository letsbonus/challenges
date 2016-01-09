<?php

namespace AppBundle\Domain\Model;

use AppBundle\Application\Handler\Command\ProductCommand;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="AppBundle\Infrastructure\Persistence\Doctrine\ProductRepository")
 * @ORM\Table(name="product")
 */
class Product
{
    /**
     * @var int $id
     *
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string $title
     *
     * @ORM\Column(type="string")
     */
    private $title;

    /**
     * @var string $description
     *
     * @ORM\Column(type="text")
     */
    private $description;

    /**
     * @var float $price
     *
     * @ORM\Column(type="decimal", scale=2)
     */
    private $price;

    /**
     * @var \DateTime $initDate
     *
     * @ORM\Column(type="datetime")
     */
    private $initDate;

    /**
     * @var \DateTime $expireDate
     *
     * @ORM\Column(type="datetime")
     */
    private $expiryDate;
    /**
     * @var  int $status
     *
     * @ORM\Column(type="integer")
     */
    private $status;

    /**
     * @var  Merchant
     *
     * @ORM\ManyToOne(targetEntity="Merchant", inversedBy="products")
     * @ORM\JoinColumn(name="merchant_id", referencedColumnName="id")
     */
    private $merchant;

    /**
     * Product constructor.
     * @param ProductCommand $product
     * @param Merchant $merchant
     */
    public function __construct(ProductCommand $product, Merchant $merchant)
    {
        $this->title = $product->title();
        $this->description = $product->description();
        $this->price = $product->price();
        $this->initDate = $product->initDate();
        $this->expiryDate = $product->expiryDate();
        $this->status = $product->status();
        $this->merchant = $merchant;
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
     * @return int
     */
    public function status()
    {
        return $this->status;
    }

    /**
     * @return Merchant
     */
    public function merchant()
    {
        return $this->merchant;
    }

    /**
     * @return array
     */
    public function toArray()
    {
        return [
            "title: " => $this->title,
            "description: " => $this->description,
            "price: " => $this->price,
            "initDate: " => $this->initDate,
            "expireDate: " => $this->expiryDate,
            "status: " => $this->status,
            "merchant: " => $this->merchant->toArray(),
        ];
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
     * @return Product
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
     * @return Product
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
     * Set price
     *
     * @param string $price
     *
     * @return Product
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

    /**
     * Set initDate
     *
     * @param \DateTime $initDate
     *
     * @return Product
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
     * @return Product
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
     * Set status
     *
     * @param integer $status
     *
     * @return Product
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return integer
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set merchant
     *
     * @param Merchant $merchant
     *
     * @return Product
     */
    public function setMerchant(Merchant $merchant = null)
    {
        $this->merchant = $merchant;

        return $this;
    }

    /**
     * Get merchant
     *
     * @return Merchant
     */
    public function getMerchant()
    {
        return $this->merchant;
    }
}
