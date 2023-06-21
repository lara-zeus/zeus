<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use LaraZeus\Wind\Models\Letter;

class WindSeeder extends Seeder
{
    public function run()
    {
        $department = DB::table('departments')
            ->insertGetId([
                'name' => 'Customer service',
                'ordering' => 1,
                'is_active' => 1,
                'desc' => 'any help with Customer service',
                'slug' => 'customer-service',
                'logo' => 'layouts/d8snXpNRmcxggHsotkH9p8lxZQ2zeA-metaRGVtby5wbmc=-.png',
                'created_at' => now(),
            ]);

        $department_2 = DB::table('departments')
            ->insertGetId([
                'name' => 'Sales',
                'ordering' => 2,
                'is_active' => 1,
                'desc' => 'any help with Sales',
                'slug' => 'sales',
                //'logo' => 'new-page',
                'created_at' => now(),
            ]);

        Letter::factory()
            ->count(5)
            ->state(function (array $attributes) use ($department) {
                return [
                    'department_id' => $department,
                ];
            })
            ->create();

        Letter::factory()
            ->count(5)
            ->state(function (array $attributes) use ($department_2) {
                return [
                    'department_id' => $department_2,
                ];
            })
            ->create();
    }
}
