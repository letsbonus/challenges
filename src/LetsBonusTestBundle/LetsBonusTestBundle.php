<?php

namespace LetsBonusTestBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class LetsBonusTestBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}
