<?php
/**
 * Created by PhpStorm.
 * User: Jorge
 * Date: 04/11/2015
 * Time: 22:49
 */

namespace Lets\ProductBundle\Importer;

use Doctrine\ORM\EntityManager;
use Lets\ProductBundle\Entity\Product;
use Symfony\Component\HttpFoundation\File\UploadedFile;

/**
 * Class ProductImporter
 *
 * Import Products from tab files
 *
 * @package Lets\ProductBundle\Importer
 */
class ProductImporter
{
    /**
     * Valid extensions
     *
     * @var array
     */
    private $validExtension = [
        'tab',
        'csv'
    ];

    /**
     * @var EntityManager
     */
    protected $entityManager;

    /**
     * @param EntityManager $entityManager
     */
    public function __construct(EntityManager $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    /**
     * Import Product from a file
     *
     * @param UploadedFile $file
     *
     * @return array
     * @throws \Exception
     */
    public function import(UploadedFile $file)
    {

        if (!$this->validate($file)) {
            throw new \Exception('Not valid extension');
        }

        return $this->importProducts($file);
    }

    /**
     * Import and return the list od
     *
     * @param UploadedFile $file
     *
     * @return array
     */
    protected function importProducts(UploadedFile $file)
    {
        $products = [];
        $tmpFile = fopen($file->getPathname(), 'r');

        // Extract header
        $header = fgetcsv($tmpFile, 0, "\t");

        while(false !== $line = fgetcsv($tmpFile, 0, "\t")){
            $product = Product::import(array_combine($header, $line));
            $this->entityManager->persist($product);
            array_push($products, $product);
        }

        $this->entityManager->flush();

        return $products;

    }

    /**
     * Check valid extension
     *
     * @param UploadedFile $file
     *
     * @return bool
     */
    protected function validate(UploadedFile $file)
    {
        return (in_array($file->getClientOriginalExtension(), $this->validExtension));
    }
}