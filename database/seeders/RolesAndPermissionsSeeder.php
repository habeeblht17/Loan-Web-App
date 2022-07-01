<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // create permissions
        $permissions = [
            'expense_create',
            'permission_create',
            'permission_edit',
            'permission_delete',
            'role_create',
            'role_edit',
            'role_delete',
            'user_access',
            'user_edit',
            'user_show',
            'user_delete',
            'loan_status',
            'loan_create',
            'loan_updateloan',
            'loan_detail',
            'loan_edit',
            'userProfile_access',
            'userProfile_create',
            'userProfile_edit',
            'nextOfKin_create',
            'nextOfKin_edit',
        ];

        foreach ($permissions as $permission)   {
            Permission::create([
                'name' => $permission
            ]);
        }

        // gets all permissions via Gate::before rule; see AuthServiceProvider
        Role::create(['name' => 'Super Admin']);

        //Agent permission
        $user = Role::create(['name' => 'Agent']);

        $agentPermissions = [
            'user_access',
            'user_show',
            'loan_status',
            'loan_updateloan',
            'loan_detail',
            'loan_edit',
        ];

        foreach ($agentPermissions as $permission)   {
            $user->givePermissionTo($permission);
        }

        //User permission
        $user = Role::create(['name' => 'User']);

        $userPermissions = [
            'loan_create',
            'userProfile_access',
            'userProfile_create',
            'userProfile_edit',
            'nextOfKin_create',
            'nextOfKin_edit',
        ];

        foreach ($userPermissions as $permission)   {
            $user->givePermissionTo($permission);
        }
    }
}
