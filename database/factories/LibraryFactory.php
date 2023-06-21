<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use LaraZeus\Sky\Models\Library;

class LibraryFactory extends Factory
{
    protected $model = Library::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'slug' => $this->faker->slug(2),
            'title' => $this->faker->word,
            'description' => $this->faker->sentence,
            'type' => $this->faker->randomElement(array_keys(config('zeus-sky.library_types'))),
            'file_path' => 'https://picsum.photos/1200/1200?random=' . $this->faker->randomNumber(),
        ];
    }
}
