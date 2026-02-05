<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class SuperAdminPermissionSeeder extends Seeder
{
    public function run()
    {
        $superadmin = Role::where('name', 'superadmin')->firstOrFail();

        $permissionIds = Permission::pluck('id')->toArray();

        // superadmin punya semua permission
        $superadmin->permissions()->sync($permissionIds);
    }
}
