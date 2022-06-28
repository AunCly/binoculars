<?php

namespace Auncly\Binoculars;

use Illuminate\Support\Facades\Facade;

class BinocularsFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'binoculars';
    }
}
