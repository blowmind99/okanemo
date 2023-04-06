<?php

namespace App\Repositories\Role;

interface RoleInterface
{
    public function getList();
    public function getById($id);
    public function create($attributes);
    public function delete($id);

}
