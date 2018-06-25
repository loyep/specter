<?php

namespace TrySpecter\Specter\Facades;

use Illuminate\Support\Facades\Facade;

class Specter extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'specter';
    }
}