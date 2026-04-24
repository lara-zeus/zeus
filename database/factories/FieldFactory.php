<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Attributes\UseModel;
use Illuminate\Database\Eloquent\Factories\Factory;
use LaraZeus\Bolt\Models\Field;
use LaraZeus\Bolt\Models\Section;

#[UseModel(Field::class)]
class FieldFactory extends Factory
{
    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->words(3, true),
            'type' => '\LaraZeus\Bolt\Fields\Classes\TextInput',
            'section_id' => Section::factory(),
            'ordering' => $this->faker->numberBetween(1, 20),
        ];
    }
}
