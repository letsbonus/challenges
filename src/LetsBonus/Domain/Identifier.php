<?php

namespace LetsBonus\Domain;

use Ramsey\Uuid\Uuid;

/**
 * Class Identifier
 */
class Identifier
{
    public static function createIdentity()
    {
        return Uuid::uuid4();
    }
}
