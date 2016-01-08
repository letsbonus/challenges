<?php

namespace LetsBonus\Domain\Core\Merchant;

use LetsBonus\Domain\Assertion;
use LetsBonus\Domain\Identifier;

/**
 * Class Merchant
 */
class Merchant
{
    /** @var string */
    private $id;

    /** @var string */
    private $name;

    /** @var string */
    private $address;

    /**
     * @param string $name
     * @param string $address
     */
    public function __construct($name, $address)
    {
        $this->id = Identifier::createIdentity();
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
        Assertion::notBlank('Merchant name is required');
        Assertion::string('Merchant name must be string type');
        $this->name = $name;
    }

    /**
     * @param $address
     */
    private function setAddress($address)
    {
        $this->address = $address;
    }
}
