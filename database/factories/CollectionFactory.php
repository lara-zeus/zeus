<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Attributes\UseModel;
use Illuminate\Database\Eloquent\Factories\Factory;
use LaraZeus\Bolt\Models\Collection;

#[UseModel(Collection::class)]
class CollectionFactory extends Factory
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
            'name' => $this->faker->words(3, true),
            'user_id' => User::factory(),
            'values' => 'abc',
        ];
    }
}
