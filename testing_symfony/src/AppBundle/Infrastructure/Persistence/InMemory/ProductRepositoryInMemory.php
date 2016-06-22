<?php

namespace AppBundle\Infrastructure\Persistence\InMemory;

use AppBundle\Application\Handler\Command\MerchantCommand;
use AppBundle\Application\Handler\Command\ProductCommand;
use AppBundle\Domain\Model\Merchant;
use AppBundle\Domain\Model\Product;
use AppBundle\Domain\Model\ProductRepository;

class ProductRepositoryInMemory implements ProductRepository
{
    public function findAllOrderedByTitle()
    {
        return new Product($this->buildProductCommand(), $this->buildMerchant());
    }

    public function persist(Product $product)
    {
        return true;
    }

    /**
     * @return Merchant
     */
    private function buildMerchant()
    {
        $merchantCommand = new MerchantCommand(
            [
                'merchant_name' => 'MerchantNameTest',
                'merchant_address' => 'MerchantAddressTest'
            ]);

        return new Merchant($merchantCommand);
    }

    /**
     * @return ProductCommand
     */
    private function buildProductCommand()
    {
        $productCommand = new ProductCommand(
            [
                'item_title' => 'MerchantNameTest',
                'item_description' => 'MerchantAddressTest',
                'item_price' => '9.99',
                'item_init_date' => '2014-10-01 23:59:05.0',
                'item_expiry_date' => '2014-10-07 23:59:05.0'
            ]);
        return $productCommand;
    }
}