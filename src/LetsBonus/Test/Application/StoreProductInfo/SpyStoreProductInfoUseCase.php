<?php

namespace LetsBonus\Test\Application\StoreProductInfo;

use LetsBonus\Application\StoreProductInfo\StoreProductInfoEntities;
use LetsBonus\Application\StoreProductInfo\StoreProductInfoUseCase;

/**
 * Class SpyStoreProductInfoUseCase
 */
class SpyStoreProductInfoUseCase extends StoreProductInfoUseCase
{
    /** @var StoreProductInfoEntities */
    private $entitiesContainer;

    protected function buildEntitiesToStore($normalizedData)
    {
        $this->entitiesContainer = parent::buildEntitiesToStore($normalizedData);

        return $this->entitiesContainer;
    }

    /**
     * @return StoreProductInfoEntities
     */
    public function spyEntitiesContainer()
    {
        return $this->entitiesContainer;
    }
}
