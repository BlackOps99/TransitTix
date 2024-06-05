<?php

namespace App\Helpers;

class StringHelper
{
    public static function convertToCamelCase(string $string): string
    {
        $words = explode('_', $string);
        $words = array_map('ucfirst', $words);
        return implode(' ', $words);
    }
}
