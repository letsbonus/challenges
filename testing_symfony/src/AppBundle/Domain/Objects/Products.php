<?php

namespace AppBundle\Domain\Objects;

use Symfony\Component\HttpFoundation\File\File;

class Products
{
    /** @var  File */
    private $file;

    /**
     * @return File
     */
    public function file()
    {
        return $this->file;
    }

    /**
     * @return bool
     */
    public function isFile()
    {
        return $this->file->isFile();
    }

    /**
     * @param File $file
     */
    public function setFile(File $file)
    {
        $this->file = $file;
    }
}