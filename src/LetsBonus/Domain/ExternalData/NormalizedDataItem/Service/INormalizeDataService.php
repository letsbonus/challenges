<?php

namespace LetsBonus\Domain\ExternalData\NormalizedDataItem\Service;

use LetsBonus\Domain\ExternalData\NormalizedDataItem\NormalizedDataItem;

/**
 * Interface INormalizeDataService
 */
interface INormalizeDataService
{
    /**
     * @param NormalizeDataServiceRequest $request
     *
     * @return NormalizedDataItem[]
     */
    public function normalize(NormalizeDataServiceRequest $request);
}
