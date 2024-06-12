<?php

namespace App\Enums;

use App\Helpers\StringHelper;

enum TripStatus: string
{
    case PENDING = 'pending';//Only On Private Trips
    case SCHEDULED = 'scheduled';//Only On Private Trips
    case DRIVER_ASSIGNED = 'driver_assigned';//Only On Private Trips
    case ON_WAY = 'on_way';//Only On Private Trips
    case PICKED_UP = 'picked_up';
    case IN_PROGRESS = 'in_progress';
    case COMPLETED = 'completed';

    public static function getEnumsArray(): array
    {
        return [
            self::PENDING->value,
            self::SCHEDULED->value,
            self::DRIVER_ASSIGNED->value,
            self::ON_WAY->value,
            self::PICKED_UP->value,
            self::IN_PROGRESS->value,
            self::COMPLETED->value,
        ];
    }

    public static function getEnumsWithValues(): array
    {
        return [
            ['status' => StringHelper::convertToCamelCase(self::PENDING->value), 'value' => self::PENDING->value],
            ['status' => StringHelper::convertToCamelCase(self::SCHEDULED->value), 'value' => self::SCHEDULED->value],
            ['status' => StringHelper::convertToCamelCase(self::DRIVER_ASSIGNED->value), 'value' => self::DRIVER_ASSIGNED->value],
            ['status' => StringHelper::convertToCamelCase(self::ON_WAY->value), 'value' => self::ON_WAY->value],
            ['status' => StringHelper::convertToCamelCase(self::PICKED_UP->value), 'value' => self::PICKED_UP->value],
            ['status' => StringHelper::convertToCamelCase(self::IN_PROGRESS->value), 'value' => self::IN_PROGRESS->value],
            ['status' => StringHelper::convertToCamelCase(self::COMPLETED->value), 'value' => self::COMPLETED->value],
        ];
    }
}
