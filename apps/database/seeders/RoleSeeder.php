<?php

namespace Database\Seeders;

use App\Repositories\Role\RoleImplement;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
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
        $roles = [
            'superadmin'
        ];

        foreach($roles as $value)
        {
            $role = Role::create([
                'name' => $value
            ]);
            $permissions = Permission::all();
            foreach($permissions as $permission) {
                $role->givePermissionTo($permission);
            }
        }
    }
}
