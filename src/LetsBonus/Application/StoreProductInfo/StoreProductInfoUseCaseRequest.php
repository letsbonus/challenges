<?php

namespace LetsBonus\Application\StoreProductInfo;

use LetsBonus\Application\IUseCaseRequest;

/**
 * Class StoreProductInfoUseCaseRequest
 */
class StoreProductInfoUseCaseRequest implements IUseCaseRequest
{
    /** @var string */
    private $uploadFileContent;

    /**
     * @param string $uploadFileContent
     */
    public function __construct($uploadFileContent)
    {
        $this->uploadFileContent = $uploadFileContent;
    }

    /**
     * @return string
     */
    public function uploadFileContent()
    {
        return $this->uploadFileContent;
    }
}
