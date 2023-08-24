<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

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
        return [
            'school_id' => fake()->numberBetween($min = 1, $max = 3),
            'start_datetime' =>fake() -> dateTimeBetween($startDate = 'now', $endDate = '+1 week')->format('Y-m-d H:i:s'),
            'end_datetime' => fake() -> dateTimeBetween($startDate = '+1 week', $endDate = '+2 week')->format('Y-m-d H:i:s'),
            'lecture_course_id' => fake()->numberBetween($min = 1, $max = 3)
        ];
    }
}
