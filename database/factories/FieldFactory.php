<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use LaraZeus\Bolt\Models\Field;
use LaraZeus\Bolt\Models\Section;

class FieldFactory extends Factory
{
    protected $model = Field::class;

    /**
     * Define the model's default state.
     *
     * @return array
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
