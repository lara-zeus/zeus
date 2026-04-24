<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Attributes\UseModel;
use Illuminate\Database\Eloquent\Factories\Factory;
use LaraZeus\Wind\Models\Department;
use LaraZeus\Wind\Models\Letter;

#[UseModel(Letter::class)]
class LetterFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     *
     * @throws \JsonException
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'email' => $this->faker->email(),
            'department_id' => Department::factory(),
            'title' => $this->faker->words(3, true),
            'message' => $this->faker->words(5, true),
            'status' => 'NEW',
        ];
    }
}
