<?php

namespace Hotstream\Tmdb\Factory;

use Hotstream\Tmdb\Exceptions\MethodException;
use Hotstream\Tmdb\Url\ApiAppendToResponseDecorator;
use Hotstream\Tmdb\Url\ApiGeneratorInterface;
use Hotstream\Tmdb\Url\ApiPageDecorator;
use Hotstream\Tmdb\Url\ApiQueryDecorator;

class ApiFactory implements ApiFactoryInterface
{
    public function getDecorator(string $method, $parameter, ApiGeneratorInterface $ApiGenerator)
    {
        switch ($method) {
            case "page":
                return new ApiPageDecorator($ApiGenerator, ...$parameter);
            case "appendToResponse":
                return new ApiAppendToResponseDecorator($ApiGenerator, ...$parameter);
            case "query":
                return new ApiQueryDecorator($ApiGenerator, ...$parameter);
            default:
                throw new MethodException("Method '{$method}' isn't supported");
        }
    }
}
