<?php

namespace App\Repositories\Permission;

use Spatie\Permission\Models\Permission;

class PermissionImplement implements PermissionInterface
{
    protected $model;

    public function __construct(Permission $model)
    {
        $this->model = $model;
    }

    public function getList()
    {
        return $this->model->all();
    }

}
