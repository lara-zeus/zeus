<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use LaraZeus\Bolt\Models\Form;
use LaraZeus\Bolt\Models\Response;

class ResponseFactory extends Factory
{
    protected $model = Response::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'form_id' => Form::factory(),
            'status' => 'NEW',
            'user_id' => 1,
            'notes' => $this->faker->text(),
        ];
    }
}
