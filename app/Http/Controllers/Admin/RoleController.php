<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Permission;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles = Role::all();
        return view('admin.roles.index', compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.roles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'min:4', 'unique:roles'],
        ]);

        Role::create([
            'name' => $request->name,
        ]);

        return redirect()->route('admin.roles.index')
            ->with('success', 'Role has been created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Role $role)
    {
        $permissions = Permission::all();
        return view('admin.roles.edit', compact('role', 'permissions'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Role $role)
    {
        $request->validate([
            'name' => ['required', 'min:4', 'unique:roles'],
        ]);

        $role->update([
            'name' => $request->name,
        ]);

        return redirect()->route('admin.roles.index')
            ->with('success', 'Role has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(Role $role)
    {
        $role->delete();

        return redirect()->route('admin.roles.index')
            ->with('success', 'Role has been deleted!');
    }

    public function givePermission(Request $request, Role $role) {

        if ($role->hasPermissionTo($request->permission)) {
            return back()->with('message', 'Permission already been given!');
        }

        $role->givePermissionTo($request->permission);
        return back()->with('success', 'Permission added!');
    }

    public function revokePermission(Role $role, Permission $permission) {
        if ($role->hasPermissionTo($permission)) {

            $role->revokePermissionTo($permission);
            return back()->with('success', 'Permission removed!');
        }

        return back()->with('message', 'Permission does not exist!');


    }
}
