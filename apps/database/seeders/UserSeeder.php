<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        $user = User::create([
            'name'     => 'admin',
            'email'    => 'admin@gmail.com',
            'password' => Hash::make(12345678),
        ]);
        $role = Role::find(1);
        $user->assignRole($role);
    }
}
