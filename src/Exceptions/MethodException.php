<?php

namespace Hotstream\Tmdb\Exceptions;

use Exception;

class MethodException extends Exception
{
    /**
     * @var int
     */
    protected $code = 1;
}
