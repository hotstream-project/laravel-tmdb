<?php

namespace Hotstream\Tmdb\Facades;

use Illuminate\Support\Facades\Facade;

class Tmdb extends Facade {

    protected static function getFacadeAccessor()
    {
        return 'Tmdb';
    }

}
