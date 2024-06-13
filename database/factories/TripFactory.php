<?php

namespace Database\Factories;

use App\Enums\TripCitys;
use App\Enums\TripStatus;
use App\Enums\TripTypes;
use App\Models\Bus;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Date;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Trip>
 */
class TripFactory extends Factory
{
    function pickRandomFromArray($array)
    {
        if (empty($array)) {
            return null;
        }

        $randomKey = array_rand($array);
        return $array[$randomKey];
    }

    function randomDateNext5Days(): string
    {
        $now = Date::now();
        $daysToAdd = fake()->numberBetween(0, 5);
        $randomDate = $now->addDays($daysToAdd);
        return $randomDate->toDateString();
    }

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'trip_type' => TripTypes::CITY_TO_CITY,
            'from' => fake()->randomElement(TripCitys::getEnumsArray()),
            'to' => fake()->randomElement(TripCitys::getEnumsArray()),
            'status' => TripStatus::PENDING,
            'bus_id' => Bus::factory()->create(),
            'trip_price' => fake()->numberBetween(100, 400),
            'trip_time' => fake()->time('H:i:s', 'now'),
            'trip_date' => $this->randomDateNext5Days(),
        ];
    }
}
