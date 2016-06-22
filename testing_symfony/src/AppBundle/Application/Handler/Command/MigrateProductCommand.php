<?php

namespace AppBundle\Application\Handler\Command;

use Symfony\Component\HttpFoundation\File\File;

class MigrateProductCommand
{
    /** @var  File */
    private $file;

    /**
     * MigrateProductCommand constructor.
     * @param File $file
     */
    public function __construct(File $file)
    {
        $this->file = $file;
    }

    /**
     * @return File
     */
    public function file()
    {
        return $this->file;
    }
}