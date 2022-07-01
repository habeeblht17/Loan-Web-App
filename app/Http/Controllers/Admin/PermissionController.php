<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $permissions = Permission::orderBy('created_at', 'DESC')->paginate(20);
        return view('admin.permissions.index', compact('permissions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.permissions.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate(['name' => 'required']);

        Permission::create($validated);


        return redirect()->route('admin.permissions.index')
        ->with('success', 'Permission has been created!');
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
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(Permission $permission)
    {
        $roles = Role::all();
        return view('admin.permissions.edit', compact('permission', 'roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Permission $permission)
    {
        $request->validate([
            'name' => ['required', 'min:4', 'unique:permissions'],
        ]);

        $permission->update([
            'name' => $request->name,
        ]);

        return redirect()->route('admin.permissions.index')
            ->with('success', 'Permission has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Permission $permission)
    {
        $permission->delete();

        return redirect()->route('admin.permissions.index')
            ->with('success', 'Permission has been deleted!');
    }

    public function assignRole(Request $request, Permission $permission) {

        if ($permission->hasRole($request->role)) {
            return back()->with('message', 'Role already been assigned!');
        }

        $permission->assignRole($request->role);
        return back()->with('success', 'Role assigned!');
    }

    public function removeRole(Permission $permission, Role $role) {

        if ($permission->hasRole($role)) {
            $permission->removeRole($role);
            return back()->with('success', 'Role removed!');
        }

        return back()->with('message', 'Role does not exist!');


    }
}
