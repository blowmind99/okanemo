<?php

namespace Database\Seeders;

use App\Repositories\Permission\PermissionImplement;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public $permission;

    public function __construct(PermissionImplement $permission)
    {
        $this->permission = $permission;
    }

    public function run()
    {
        /**
         * permission backend dashboard

         */

        $permissions = [
            'feature_category',
            'feature_course',
            'feature_enrollment',
            'feature_user',
            'feature_role',
            'feature_permission',
        ];

        foreach($permissions as $permission)
        {
            Permission::create([
                'name' => $permission
            ]);
        }
    }
}
