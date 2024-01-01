<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Subject>
 */
class SubjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        static $counter = 1;

        return [
            'title' => fake()->word(),
            'lecturer_id' => $counter++,
            'semester' => fake()->numberBetween(1,8),
            'academic_year' => "2022/2023",
            'sks' => fake()->numberBetween(2, 3),
            
        ];
    }
}
