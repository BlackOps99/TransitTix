<?php

namespace App\Enums;

use App\Helpers\StringHelper;

enum BusClasses: string
{
    case A = 'a';
    case B = 'b';
    case C = 'c';
    case D = 'd';

    public static function getEnumsArray(): array
    {
        return [
            self::A->value,
            self::B->value,
            self::C->value,
            self::D->value,
        ];
    }

    public static function getEnumsWithValues(): array
    {
        return [
            ['class' => StringHelper::convertToCamelCase(self::A->value), 'value' => self::A->value],
            ['class' => StringHelper::convertToCamelCase(self::B->value), 'value' => self::B->value],
            ['class' => StringHelper::convertToCamelCase(self::C->value), 'value' => self::C->value],
            ['class' => StringHelper::convertToCamelCase(self::D->value), 'value' => self::D->value],
        ];
    }
}
