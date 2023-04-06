<?php

namespace App\Http\Controllers\Role;

use App\Helpers\SessionHelper;
use App\Http\Controllers\Controller;
use App\Http\Requests\Role\StoreRoleRequest;
use App\Repositories\Permission\PermissionImplement;
use App\Repositories\Role\RoleImplement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    protected $role;
    protected $permission;

    public function __construct(RoleImplement $role, PermissionImplement $permission)
    {
        $this->role = $role;
        $this->permission = $permission;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $roles = $this->role->getList();
        return view('role.index', compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $permissions = $this->permission->getList();
        return view('role.create', compact('permissions'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRoleRequest $request)
    {
        $this->role->create($request->all());
        SessionHelper::alert('success', 'Successfully create data');
        return redirect('role');
    }

    /**
     * Display the specified resource.
     */
    public function show(Role $role)
    {
        $permissions = $this->permission->getList();
        return view('role.show', compact('role', 'permissions'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Role $role)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Role $role)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Role $role)
    {
        $this->role->delete($role->id);
        SessionHelper::alert('success', 'Successfully delete data');
        return back();
    }
}
