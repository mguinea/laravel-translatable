<?php

namespace Mguinea\Translatable\Exceptions;

use Exception;

class LocaleIsNotValidException extends Exception
{
    public static function make(string $locale)
    {
        return new static("Not registered in `translatable` config file the locale: `{$locale}`");
    }
}
