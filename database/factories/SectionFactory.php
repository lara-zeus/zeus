<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Attributes\UseModel;
use Illuminate\Database\Eloquent\Factories\Factory;
use LaraZeus\Bolt\Models\Form;
use LaraZeus\Bolt\Models\Section;

#[UseModel(Section::class)]
class SectionFactory extends Factory
{
    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->words(3, true),
            'form_id' => Form::factory(),
            'ordering' => $this->faker->numberBetween(1, 10),
        ];
    }
}
