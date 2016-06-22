<?php

namespace AppBundle\Application\Handler\Command;

use AppBundle\Application\Exception\PropertyNotExist;

class DataCommand
{
    /** @var  ProductCommand $productRequest */
    private $productRequest;
    /** @var  MerchantCommand $merchantRequest */
    private $merchantRequest;
    /** @var  array $productData */
    private $productData;
    /** @var  array $merchantData */
    private $merchantData;

    /**
     * @param array $product
     * @param array $fieldTitles
     * @throws PropertyNotExist
     */
    public function __construct(array $product, array $fieldTitles)
    {
        $this->buildProductAndMerchantData($product, $fieldTitles);
        $this->buildProductRequest();
        $this->buildMerchantRequest();
    }

    /**
     * @return ProductCommand
     */
    public function productRequest()
    {
        return $this->productRequest;
    }

    /**
     * @return MerchantCommand
     */
    public function merchantRequest()
    {
        return $this->merchantRequest;
    }

    /**
     * @param array $products
     * @param array $fieldTitles
     * @return array
     * @throws PropertyNotExist
     */
    private function buildProductAndMerchantData(array $products, array $fieldTitles)
    {
        foreach ($products as $key => $item) {
            $property = $this->cleanFieldName($fieldTitles[$key]);
            $productProperty = property_exists(ProductCommand::class, $property);
            $merchantProperty = property_exists(MerchantCommand::class, $property);

            if (!$productProperty && !$merchantProperty) {
                throw new PropertyNotExist('Property not Exist');
            }

            $this->setItem($productProperty, $item, $property);
        }
    }

    /**
     * @param string $fieldTitle
     *
     * @return string
     */
    private function cleanFieldName($fieldTitle)
    {
        return trim(str_replace(' ', '_', $fieldTitle));
    }

    /**
     * @param $productProperty
     * @param $item
     * @param $property
     */
    private function setItem($productProperty, $item, $property)
    {
        $productProperty
            ? $this->productData[$property] = $item
            : $this->merchantData[$property] = $item;
    }

    private function buildProductRequest()
    {
        $this->productRequest = new ProductCommand($this->productData);
    }

    private function buildMerchantRequest()
    {
        $this->merchantRequest = new MerchantCommand($this->merchantData);
    }
}