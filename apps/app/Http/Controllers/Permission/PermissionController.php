<?php

namespace App\Http\Controllers\Permission;

use App\Http\Controllers\Controller;
use App\Models\Permission;
use App\Repositories\Permission\PermissionImplement;

class PermissionController extends Controller
{
    protected $permission;

    public function __construct(PermissionImplement $permission)
    {
        $this->permission = $permission;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $permissions = $this->permission->getList();
        return view('permission.index', compact('permissions'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Permission $permission)
    {
        return view('permission.show', compact('permission'));
    }

}
