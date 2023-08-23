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
        // $start_date =  fake() -> date($format=‘Y-m-d’,$min=‘now’);
        // $end_date = $start_date->addDays(3);

        return [
            //'reservation_car_id' => fake() -> dateTimeBetween($startDate = 'now', $endDate = '+2 week'),
            'car_id' => fake()->numberBetween($min = 1, $max = 10),
            'start_date' =>fake() -> dateTimeBetween($startDate = 'now', $endDate = '+2 week'),
            'end_date' => '2023-08-23'
        ];
    }
}
