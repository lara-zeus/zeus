<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class LetterFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     */
    public function getModel(): string
    {
        return config('zeus-wind.models.letter');
    }

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'email' => $this->faker->email,
            'department_id' => config('zeus-wind.models.department')::factory(),
            'title' => $this->faker->words(3, true),
            'message' => $this->faker->words(5, true),
            'status' => 'NEW',
        ];
    }
}
