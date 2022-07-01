<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::where('complete', 1)->orderBy('created_at', 'DESC')->paginate(10);
        return view('admin.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     *
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        $roles = Role::all();
        $permissions = Permission::all();
        return view('admin.users.roles',compact('user', 'roles', 'permissions'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('admin.users.index')
        ->with('success', 'User has been deleted!');
    }

    //Assign role to user
    public function assignRole(Request $request, User $user) {

        if ($user->hasRole($request->role)) {
            return back()->with('message', 'Role already been assigned!');
        }

        $user->assignRole($request->role);
        return back()->with('success', 'Role assigned!');
    }

    //Remove Assigned role to user
    public function removeRole(User $user, Role $role) {

        if ($user->hasRole($role)) {
            $user->removeRole($role);
            return back()->with('success', 'Role removed!');
        }

        return back()->with('message', 'Role does not exist!');

    }

    //Give Permission to user
    public function givePermission(Request $request, User $user) {

        if ($user->hasPermissionTo($request->permission)) {
            return back()->with('message', 'Permission already been given!');
        }

        $user->givePermissionTo($request->permission);
        return back()->with('success', 'Permission added!');
    }

    public function revokePermission(User $user, Permission $permission) {
        if ($user->hasPermissionTo($permission)) {

            $user->revokePermissionTo($permission);
            return back()->with('success', 'Permission removed!');
        }

        return back()->with('message', 'Permission does not exist!');

    }

    public function search(Request $request) {
        $search = $request->search;

        $results = User::where('firstname','like', "%$search%")
                        ->orwhere('lastname','like', "% $search%")
                        ->orwhere('middlename','like', "% $search%")
                        ->orwhere('email','like', "% $search%")->get();
        return view('admin.users.search', compact('results'));
    }
}
