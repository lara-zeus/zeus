<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use LaraZeus\Bolt\Models\Category;

class FormFactory extends Factory
{
    protected $model = \LaraZeus\Bolt\Models\Form::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->words(3, true),
            'user_id' => User::factory(),
            'ordering' => $this->faker->numberBetween(1, 20),
            'description' => $this->faker->text(),
            'slug' => $this->faker->slug(),
            'is_active' => 1,
            'category_id' => Category::factory(),
            'start_date' => $this->faker->dateTime(),
            'end_date' => $this->faker->dateTime(),
        ];
    }
}
