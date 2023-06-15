<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use LaraZeus\Wind\Models\Department;

class WindSeeder extends Seeder
{
    public function run()
    {
        config('zeus-wind.models.department')::factory()
            ->has(
                config('zeus-wind.models.letter')::factory()
                    ->count(5)
                    ->state(function (array $attributes, Department $department) {
                        return [
                            'department_id' => $department->id,
                        ];
                    })
            )->count(3)->create();
    }
}
