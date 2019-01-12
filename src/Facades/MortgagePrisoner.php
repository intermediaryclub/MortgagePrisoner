<?php

namespace IntermediaryClub\MortgagePrisoner\Facades;

use Illuminate\Support\Facades\Facade;

class MortgagePrisoner extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'mortgageprisoner';
    }
}
