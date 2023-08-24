<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Carbon\Carbon;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ReservationLecture>
 */
class ReservationLectureFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    public function definition(): array
    {

        $dateOptions = [
            '2023-08-24',
            '2023-08-25',
            '2023-08-26',
            // 他の日付も追加
        ];

        $randomDate = $this->faker->randomElement($dateOptions);

        return [
            'school_id' => fake()->numberBetween($min = 1, $max = 3),
            'start_datetime' => Carbon::parse($randomDate . ' 10:00:00'),
            'end_datetime' => Carbon::parse($randomDate . ' 11:00:00'),
            'lecture_course_id' => fake()->numberBetween($min = 1, $max = 3)
        ];
    }
}
