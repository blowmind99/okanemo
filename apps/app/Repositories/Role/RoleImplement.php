<?php

namespace App\Repositories\Role;

use App\Repositories\Role\RoleInterface;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleImplement implements RoleInterface
{
    protected $model;
    protected $modelPermission;

    public function __construct(Role $model, Permission $modelPermission)
    {
        $this->model = $model;
        $this->modelPermission = $modelPermission;
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
        $role        = $this->model::create(['name' => $attributes['name']]);
        $permissions = $this->modelPermission::whereIn('id', $attributes['permission'])->get();
        foreach($permissions as $permission) {
            $role->givePermissionTo($permission);
        }
    }

    public function delete($id)
    {
        $data = $this->getById($id);
        return $data->delete();
    }

}
