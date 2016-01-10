<?php

namespace LetsBonus\Application;

/**
 * Interface IUseCase
 */
interface IUseCase
{
    /**
     * @param IUseCaseRequest $request
     *
     * @return mixed
     */
    public function execute(IUseCaseRequest $request = null);
}
