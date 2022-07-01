<?php

namespace Auncly\Binoculars;

class Binoculars
{
    
    /**
     * Get the default JavaScript variables for Telescope.
     *
     * @return array
     */
    public static function scriptVariables()
    {
        return [
            'path' => config('binoculars.path'),
            'timezone' => config('app.timezone'),
        ];
    }
    
}
