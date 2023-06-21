<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use LaraZeus\Bolt\Models\Field;
use LaraZeus\Bolt\Models\Form;
use LaraZeus\Bolt\Models\Response;

class FieldResponseFactory extends Factory
{
    protected $model = \LaraZeus\Bolt\Models\FieldResponse::class;

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
