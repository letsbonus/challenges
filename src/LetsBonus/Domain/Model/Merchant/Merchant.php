<?php

namespace LetsBonus\Domain\Model\Merchant;

use LetsBonus\Domain\Assertion;
use LetsBonus\Domain\Identifier;
use LetsBonus\Domain\Model\Product\Product;
use LetsBonus\Domain\Model\Product\ProductAlreadyExistsException;

/**
 * Class Merchant
 *
 *
 */
class Merchant
{
    /** @var string */
    private $id;

    /** @var string */
    private $name;

    /** @var string */
    private $address;

    /** @var Product[] */
    private $products;

    /**
     * @param string $name
     * @param string $address
     */
    public function __construct($name, $address)
    {
        $this->id = (string) Identifier::createIdentity();
        $this->products = [];
        $this->setName($name);
        $this->setAddress($address);
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
    public function name()
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function address()
    {
        return $this->address;
    }

    /**
     * @param $name
     */
    private function setName($name)
    {
        Assertion::notBlank($name, 'Merchant name is required');
        Assertion::string($name, 'Merchant name must be string type');
        $this->name = $name;
    }

    /**
     * @param $address
     */
    private function setAddress($address)
    {
        $this->address = $address;
    }

    /**
     * @return Product[]
     */
    public function products()
    {
        return $this->products;
    }

    /**
     * @param Product $product
     *
     * @return Merchant
     * @throws ProductAlreadyExistsException
     */
    public function addProduct(Product $product)
    {
        $this->assertProductDoesNotExists($product);
        $this->products[] = $product;

        return $this;
    }

    /**
     * @param Product $product
     *
     * @throws ProductAlreadyExistsException
     */
    private function assertProductDoesNotExists(Product $product)
    {
        $products = $this->products();
        foreach ($products as $existingProduct) {
            if ($existingProduct->id() === $product->id()) {
                throw new ProductAlreadyExistsException(sprintf('Product with id: %s already exists', $product->id()));
            }
        }
    }
}
