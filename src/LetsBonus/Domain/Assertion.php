<?php

namespace LetsBonus\Domain;

/**
 * Class Assertion
 */
class Assertion extends \Assert\Assertion
{
    protected static function createException($value, $message, $code, $propertyPath, array $constraints = array())
    {
        return new \InvalidArgumentException($message, $code);
    }
}
