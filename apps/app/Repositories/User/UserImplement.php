<?php

namespace App\Repositories\User;

use App\Models\User;
use App\Repositories\Role\RoleImplement;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;


class UserImplement implements UserInterface
{
    protected $model;
    protected $role;

    public function __construct(User $model, RoleImplement $role)
    {
        $this->model = $model;
        $this->role = $role;

    }

    public function getList()
    {
        return $this->model->all();
    }

    public function getById($id)
    {
        return $this->model->findOrFail($id);
    }

    public function create($attributes)
    {
        $user = User::create([
            'name'     => $attributes['name'],
            'email'    => $attributes['email'],
            'password' => Hash::make($attributes['password']),
        ]);
        $role = $this->role->getById($attributes['role']);
        $user->assignRole($role);
    }

    public function update($user, $attributes)
    {
        $user->update([
            'name' => $attributes['name'],
            'email' => $attributes['email'],
        ]);
        if ($attributes['password'] != null) {
            $user->update([
                'password' => Hash::make($attributes['password'])
            ]);
        }
        $role = $this->role->getById($attributes['role']);
        $user->syncRoles($role);
        return $user;
    }

    public function delete($id)
    {
        $data = $this->getById($id);
        return $data->delete();
    }

}
