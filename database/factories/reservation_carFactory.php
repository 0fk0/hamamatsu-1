<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\reservation_car;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class reservation_carFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = reservation_car::class;

    public function definition(): array
    {
        $start_date =  fake() -> date($format=‘Y-m-d’,$min=‘now’);
        $end_date = $start_date->addDays(3);

        return [
            //'reservation_car_id' => fake()->name(),
            'car_id' => fake()->randomNumber(1),
            'start_date' => $start_date,
            'end_date' => $end_date
        ];
    }
}
