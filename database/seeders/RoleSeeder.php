<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        $role = [
            [
                'name' => 'Admin',
            ],
            [
                'name' => 'Employee',
            ],
        ];

        foreach ($role as $value) {
            Role::create($value);
        }
    }
}
