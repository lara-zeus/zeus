<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Attributes\UseModel;
use Illuminate\Database\Eloquent\Factories\Factory;
use LaraZeus\Bolt\Models\Field;
use LaraZeus\Bolt\Models\Form;
use LaraZeus\Bolt\Models\Response;

#[UseModel(\LaraZeus\Bolt\Models\FieldResponse::class)]
class FieldResponseFactory extends Factory
{
    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'form_id' => Form::factory(),
            'field_id' => Field::factory(),
            'response_id' => Response::factory(),
            'response' => $this->faker->words(3, true),
        ];
    }
}
