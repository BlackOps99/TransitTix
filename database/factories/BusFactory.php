<?php

namespace Database\Factories;

use App\Enums\BusClasses;
use App\Models\Driver;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Bus>
 */
class BusFactory extends Factory
{
    function pickRandomFromArray($array) {
        if (empty($array)) {
            return null;
        }

        $randomKey = array_rand($array);
        return $array[$randomKey];
    }

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'bus_name' => fake()->name(),
            'bus_modal' => fake()->lastName(),
            'bus_plat_numbers' => fake()->numberBetween(1, 10),
            'bus_color' => fake()->colorName(),
            'bus_class' => $this->pickRandomFromArray(BusClasses::getEnumsArray()),
            'driver_id' => Driver::factory()->create()
        ];
    }
}
