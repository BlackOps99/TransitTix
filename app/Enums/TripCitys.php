<?php

namespace App\Enums;

use App\Helpers\StringHelper;

enum TripCitys: string
{
    case CAIRO = 'cairo';
    case ALEXANDRIA = 'alexandria';
    case LUXOR = 'luxor';
    case HURGHADA = 'hurghada';
    case QENA = 'qena';
    case ASSIUT = 'assiut';

    public static function getEnums(): array
    {
        return [
            self::CAIRO->value,
            self::ALEXANDRIA->value,
            self::LUXOR->value,
            self::HURGHADA->value,
            self::QENA->value,
            self::ASSIUT->value,
        ];
    }

    public static function getEnumsWithValues(): array
    {
        return [
            ['name' => StringHelper::convertToCamelCase(self::CAIRO->value), 'value' => self::CAIRO->value],
            ['name' => StringHelper::convertToCamelCase(self::ALEXANDRIA->value), 'value' => self::ALEXANDRIA->value],
            ['name' => StringHelper::convertToCamelCase(self::LUXOR->value), 'value' => self::LUXOR->value],
            ['name' => StringHelper::convertToCamelCase(self::HURGHADA->value), 'value' => self::HURGHADA->value],
            ['name' => StringHelper::convertToCamelCase(self::QENA->value), 'value' => self::QENA->value],
            ['name' => StringHelper::convertToCamelCase(self::ASSIUT->value), 'value' => self::ASSIUT->value],
        ];
    }
}
