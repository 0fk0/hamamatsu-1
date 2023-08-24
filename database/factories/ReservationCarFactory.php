<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ReservationCarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    // protected $model = ReservationCar::class;

    public function definition(): array
    {


        return [
            'car_id' => fake()->numberBetween($min = 1, $max = 10),
            'start_date' =>fake() -> dateTimeBetween($startDate = 'now', $endDate = '+1 week'),
            'end_date' => fake() -> dateTimeBetween($startDate = '+1 week', $endDate = '+2 week')
        ];
    }
}
