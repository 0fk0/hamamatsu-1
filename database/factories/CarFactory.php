<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Car>
 */
class CarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'model' => fake() -> safeColorName(),
            'capacity' =>fake() -> numberBetween($min = 1, $max = 5),
            'address' => fake() -> address(),
            'fee' => fake() -> numberBetween($min = 1000, $max = 5000),
            'name_owner'=> fake() -> name(),
            'img_path' => 'App/public/test.jpg',
            'school_id'=> fake() -> numberBetween($min = 1, $max = 2)
        ];
    }
}
