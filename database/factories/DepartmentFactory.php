<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use LaraZeus\Wind\Models\Department;

class DepartmentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Department::class;

    /**
     * Define the model's default state.
     *
     *
     * @throws \JsonException
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->words(3, true),
            'ordering' => $this->faker->numberBetween(1, 10),
            'is_active' => $this->faker->numberBetween(0, 1),
            'desc' => $this->faker->words(5, true),
            'slug' => $this->faker->slug,
        ];
    }
}
