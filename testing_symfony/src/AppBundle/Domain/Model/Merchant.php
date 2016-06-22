<?php

namespace AppBundle\Domain\Model;

use AppBundle\Application\Handler\Command\MerchantCommand;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="AppBundle\Infrastructure\Persistence\Doctrine\MerchantRepository")
 * @ORM\Table(name="merchant")
 *
 */
class Merchant
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
     * @var string $merchantAddress
     *
     * @ORM\Column(type="string")
     */
    private $merchant_address;

    /**
     * @var string $merchantName
     *
     * @ORM\Column(type="string")
     */
    private $merchant_name;

    /**
     * @var ArrayCollection $products
     *
     * @ORM\OneToMany(targetEntity="Product", mappedBy="merchant")
     */
    protected $products;

    /**
     * Merchant constructor.
     * @param MerchantCommand $merchantRequest
     */
    public function __construct(MerchantCommand $merchantRequest)
    {
        $this->products = new ArrayCollection();
        $this->merchant_address = $merchantRequest->merchantAddress();
        $this->merchant_name = $merchantRequest->merchantName();
    }

    /**
     * @return string
     */
    public function getMerchantAddress()
    {
        return $this->merchant_address;
    }

    /**
     * @return string
     */
    public function getMerchantName()
    {
        return $this->merchant_name;
    }

    /**
     * @return mixed
     */
    public function products()
    {
        return $this->products;
    }

    /**
     * @param mixed $products
     */
    public function setProducts($products)
    {
        $this->products = $products;
    }

    /**
     *
     */
    public function toArray()
    {
        return [
            "merchantName: " => $this->merchant_name,
            "merchantAddress: " => $this->merchant_address,
            "products: " => $this->products->toArray()
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
     * Set merchantAddress
     *
     * @param string $merchantAddress
     *
     * @return Merchant
     */
    public function setMerchantAddress($merchantAddress)
    {
        $this->merchant_address = $merchantAddress;

        return $this;
    }

    /**
     * Set merchantName
     *
     * @param string $merchantName
     *
     * @return Merchant
     */
    public function setMerchantName($merchantName)
    {
        $this->merchant_name = $merchantName;

        return $this;
    }

    /**
     * Add product
     *
     * @param Product $product
     *
     * @return Merchant
     */
    public function addProduct(Product $product)
    {
        $this->products[] = $product;

        return $this;
    }

    /**
     * Remove product
     *
     * @param Product $product
     */
    public function removeProduct(Product $product)
    {
        $this->products->removeElement($product);
    }

    /**
     * Get products
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getProducts()
    {
        return $this->products;
    }
}
