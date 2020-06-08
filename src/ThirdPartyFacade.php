<?php

namespace BinarCode\Skeleton;

use Illuminate\Support\Facades\Facade;

/**
 * @see \BinarCode\LaravelThirdParty\ThirdParty
 */
class ThirdPartyFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'skeleton';
    }
}
