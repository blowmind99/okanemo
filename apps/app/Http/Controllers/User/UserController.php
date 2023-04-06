<?php

namespace App\Http\Controllers\User;

use App\Helpers\SessionHelper;
use App\Http\Controllers\Controller;
use App\Http\Requests\User\StoreUserRequest;
use App\Http\Requests\User\UpdateUserRequest;
use App\Repositories\Role\RoleImplement;
use App\Repositories\User\UserImplement;
use App\Models\User;

class UserController extends Controller
{
    protected $user;
    protected $role;

    public function __construct(UserImplement $user, RoleImplement $role)
    {
        $this->user = $user;
        $this->role = $role;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = $this->user->getList();
        return view('user.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $roles = $this->role->getList();
        return view('user.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUserRequest $request)
    {
        $this->user->create($request->all());
        SessionHelper::alert('success', 'Successfully create data');
        return redirect('user');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        return view('user.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        $roles = $this->role->getList();
        return view('user.edit', compact('user', 'roles'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUserRequest $request, User $user)
    {
        $user = $this->user->update($user, $request->all());
        SessionHelper::alert('success', 'Successfully update data');
        return redirect('user');
    }

    // /**
    //  * Remove the specified resource from storage.
    //  */
    public function destroy(User $user)
    {
        $this->user->delete($user->id);
        SessionHelper::alert('success', 'Successfully delete data');
        return back();
    }

}
