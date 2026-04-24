<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Attributes\UseModel;
use Illuminate\Database\Eloquent\Factories\Factory;
use LaraZeus\Sky\Models\Library;
use LaraZeus\Sky\SkyPlugin;

#[UseModel(Library::class)]
class LibraryFactory extends Factory
{
    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'slug' => $this->faker->slug(2),
            'title' => $this->faker->word(),
            'description' => $this->faker->sentence(),
            'type' => $this->faker->randomElement(array_keys(SkyPlugin::get()->getLibraryTypes())),
            'file_path' => 'https://picsum.photos/1200/1200?random='.$this->faker->randomNumber(),
        ];
    }
}
