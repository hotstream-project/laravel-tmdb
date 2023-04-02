<?php

namespace Hotstream\Tmdb\Factory;

use Hotstream\Tmdb\Url\ApiGeneratorInterface;

interface ApiFactoryInterface
{
    public function getDecorator(string $method, $parameter, ApiGeneratorInterface $ApiGenerator);
}
