<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use BezhanSalleh\FilamentShield\Support\Utils;
class ShieldSeeder extends Seeder
{
    /**
    * Run the database seeds.
    *
    * @return void
    */
    public function run()
    {
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        $rolesWithPermissions = '[{"name":"super_admin","guard_name":"web","permissions":["view_category","view_any_category","create_category","update_category","restore_category","restore_any_category","replicate_category","reorder_category","delete_category","delete_any_category","force_delete_category","force_delete_any_category","view_collection","view_any_collection","create_collection","update_collection","restore_collection","restore_any_collection","replicate_collection","reorder_collection","delete_collection","delete_any_collection","force_delete_collection","force_delete_any_collection","view_department","view_any_department","create_department","update_department","restore_department","restore_any_department","replicate_department","reorder_department","delete_department","delete_any_department","force_delete_department","force_delete_any_department","view_faq","view_any_faq","create_faq","update_faq","restore_faq","restore_any_faq","replicate_faq","reorder_faq","delete_faq","delete_any_faq","force_delete_faq","force_delete_any_faq","view_form","view_any_form","create_form","update_form","restore_form","restore_any_form","replicate_form","reorder_form","delete_form","delete_any_form","force_delete_form","force_delete_any_form","view_layout","view_any_layout","create_layout","update_layout","restore_layout","restore_any_layout","replicate_layout","reorder_layout","delete_layout","delete_any_layout","force_delete_layout","force_delete_any_layout","view_letter","view_any_letter","create_letter","update_letter","restore_letter","restore_any_letter","replicate_letter","reorder_letter","delete_letter","delete_any_letter","force_delete_letter","force_delete_any_letter","view_library","view_any_library","create_library","update_library","restore_library","restore_any_library","replicate_library","reorder_library","delete_library","delete_any_library","force_delete_library","force_delete_any_library","view_navigation","view_any_navigation","create_navigation","update_navigation","restore_navigation","restore_any_navigation","replicate_navigation","reorder_navigation","delete_navigation","delete_any_navigation","force_delete_navigation","force_delete_any_navigation","view_page","view_any_page","create_page","update_page","restore_page","restore_any_page","replicate_page","reorder_page","delete_page","delete_any_page","force_delete_page","force_delete_any_page","view_post","view_any_post","create_post","update_post","restore_post","restore_any_post","replicate_post","reorder_post","delete_post","delete_any_post","force_delete_post","force_delete_any_post","view_response","view_any_response","create_response","update_response","restore_response","restore_any_response","replicate_response","reorder_response","delete_response","delete_any_response","force_delete_response","force_delete_any_response","view_role","view_any_role","create_role","update_role","delete_role","delete_any_role","view_tag","view_any_tag","create_tag","update_tag","restore_tag","restore_any_tag","replicate_tag","reorder_tag","delete_tag","delete_any_tag","force_delete_tag","force_delete_any_tag"]},{"name":"filament_user","guard_name":"web","permissions":[]}]';
        $directPermissions = '[]';

        static::makeRolesWithPermissions($rolesWithPermissions);
        static::makeDirectPermissions($directPermissions);

        $this->command->info('Shield Seeding Completed.');
    }

    protected static function makeRolesWithPermissions(string $rolesWithPermissions): void
    {
        if (! blank($rolePlusPermissions = json_decode($rolesWithPermissions,true))) {

            foreach ($rolePlusPermissions as $rolePlusPermission) {
                $role = Utils::getRoleModel()::firstOrCreate([
                    'name' => $rolePlusPermission['name'],
                    'guard_name' => $rolePlusPermission['guard_name']
                ]);

                if (! blank($rolePlusPermission['permissions'])) {

                    $permissionModels = collect();

                    collect($rolePlusPermission['permissions'])
                        ->each(function ($permission) use($permissionModels) {
                            $permissionModels->push(Utils::getPermissionModel()::firstOrCreate([
                                'name' => $permission,
                                'guard_name' => 'web'
                            ]));
                        });
                    $role->syncPermissions($permissionModels);

                }
            }
        }
    }

    public static function makeDirectPermissions(string $directPermissions): void
    {
        if (! blank($permissions = json_decode($directPermissions,true))) {

            foreach($permissions as $permission) {

                if (Utils::getPermissionModel()::whereName($permission)->doesntExist()) {
                    Utils::getPermissionModel()::create([
                        'name' => $permission['name'],
                        'guard_name' => $permission['guard_name'],
                    ]);
                }
            }
        }
    }
}
