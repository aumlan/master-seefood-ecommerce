<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $superAdmin =Role::create(['name'=>'SuperAdmin']);
        $roleAdmin =Role::create(['name'=>'admin']);
        $user =Role::create(['name'=>'user']);
        $vendor =Role::create(['name'=>'vendor']);

        $permissions =[
            'admin.dashboard',
            'vendor.dashboard',
            'users.dashboard',

            'admin.create',
            'admin.edit',
            'admin.delete',
            'admin.view',

            // Role Permission
            'role.create',
            'role.edit',
            'role.delete',
            'role.view'
        ];

        // Create and Assign Permission
        for($i=0;$i< count($permissions);$i++){
            // create persmission
           $permission = Permission::create(['name'=>$permissions[$i]]);
           $superAdmin->givePermissionTo($permission);
           $permission->assignRole($superAdmin);
        }
    }
}
