<?php

namespace AppBundle\Application\Handler\Command;

abstract class Command
{
    /**
     * @param null $request
     *
     * @return mixed
     */
    abstract public function execute($request = null);

    /**
     * @return string
     */
    abstract public function getRequestClass();

    /**
     * @param $request
     *
     * @return void
     */
    public function checkRequest($request)
    {
        $class = $this->getRequestClass();
        if (!$request instanceof $class) {
            throw new \InvalidArgumentException(
                self::class . 'expects ' . $this->getRequestClass() . '
                request class, ' . $class . ' given.'
            );
        }
    }
}