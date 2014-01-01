<?php

namespace Fibo\Router\Validation;

interface ParameterValidator
{
    /**
     * Validate a value.
     * @param mixed $value
     * @return bool True if the value validates, false otherwise.
     */
    function validate($value);
}