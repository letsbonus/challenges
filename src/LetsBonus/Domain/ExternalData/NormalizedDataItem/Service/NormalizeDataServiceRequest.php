<?php

namespace LetsBonus\Domain\ExternalData\NormalizedDataItem\Service;

/**
 * Class NormalizeDataServiceRequest
 */
class NormalizeDataServiceRequest
{
    /** @var string */
    private $data;

    /**
     * @param string $data
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * @return string
     */
    public function data()
    {
        return $this->data;
    }
}
