<?php

namespace Hotstream\Tmdb\Tests;

use Hotstream\Tmdb\TmdbServiceProvider;
use Orchestra\Testbench\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{

    protected function getPackageProviders($app): array
    {
        return [
            TmdbServiceProvider::class,
        ];
    }

}
