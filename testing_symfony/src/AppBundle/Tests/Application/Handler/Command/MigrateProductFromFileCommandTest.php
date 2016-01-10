<?php

namespace AppBundle\Tests\Application\Handler\Command;

use AppBundle\Application\Handler\Command\MigrateProductCommand;
use AppBundle\Application\Handler\Command\MigrateProductFromFileCommand;
use AppBundle\Infrastructure\Persistence\InMemory\MerchantRepositoryInMemory;
use AppBundle\Infrastructure\Persistence\InMemory\ProductRepositoryInMemory;
use InvalidArgumentException;
use Symfony\Component\HttpFoundation\File\File;

class MigrateProductFromFileCommandTest extends \PHPUnit_Framework_TestCase
{
    /** @var  MigrateProductFromFileCommand */
    private $cmdHandler;

    protected function setUp()
    {
        $this->buildCommandHandler(
            $this->buildProductRepositoryInMemory(),
            $this->buildMerchantRepositoryInMemory()
        );
    }

    protected function tearDown()
    {
        $this->cmdHandler = null;
    }

    /**
     * @test
     *
     * @expectedException \InvalidArgumentException
     */
    public function commandRequestFail()
    {
        $this->cmdHandler->execute([]);
    }

    public function testCommandRequestOk()
    {
        $file = $this->buildFile();
        $request = new MigrateProductCommand($file);
        $this->cmdHandler->execute($request);
        $this->assertTrue(true);
    }

    private function buildCommandHandler(
        ProductRepositoryInMemory $productRepository,
        MerchantRepositoryInMemory $merchantRepository
    ) {
        $this->cmdHandler = new MigrateProductFromFileCommand($productRepository, $merchantRepository);
    }

    /**
     * @return ProductRepositoryInMemory
     */
    private function buildProductRepositoryInMemory()
    {
        return new ProductRepositoryInMemory();
    }

    /**
     * @return MerchantRepositoryInMemory
     */
    private function buildMerchantRepositoryInMemory()
    {
        return new MerchantRepositoryInMemory();
    }

    /**
     * @return File
     */
    private function buildFile()
    {
        return new File(__DIR__.DIRECTORY_SEPARATOR.'testFileData.tab');
    }
}