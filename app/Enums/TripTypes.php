<?php

namespace App\Enums;

use App\Helpers\StringHelper;

enum TripTypes: string
{
    case AIR_PORT_TO_CITY = 'air_port_to_city';//Private Only
    case CITY_TO_AIR_PORT = 'city_to_air_port';//Private Only
    case CITY_TO_CITY = 'city_to_city';
    case PLACE_TO_PLACE = 'place_to_place';

    public static function getEnumsArray(): array
    {
        return [
            self::AIR_PORT_TO_CITY->value,
            self::CITY_TO_AIR_PORT->value,
            self::CITY_TO_CITY->value,
            self::PLACE_TO_PLACE->value,
        ];
    }

    public static function getEnumsWithValues(): array
    {
        return [
            ['type' => StringHelper::convertToCamelCase(self::AIR_PORT_TO_CITY->value), 'value' => self::AIR_PORT_TO_CITY->value],
            ['type' => StringHelper::convertToCamelCase(self::CITY_TO_AIR_PORT->value), 'value' => self::CITY_TO_AIR_PORT->value],
            ['type' => StringHelper::convertToCamelCase(self::CITY_TO_CITY->value), 'value' => self::CITY_TO_CITY->value],
            ['type' => StringHelper::convertToCamelCase(self::PLACE_TO_PLACE->value), 'value' => self::PLACE_TO_PLACE->value],
        ];
    }
}
