<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    public function run()
    {
        Permission::insert([
            [
                'name' => 'permission-index',
                'description' => 'List Data Permission'
            ],
            [
                'name' => 'permission-create',
                'description' => 'Create Data Permission'
            ],
            [
                'name' => 'permission-store',
                'description' => 'Store Data Permission'
            ],
            [
                'name' => 'permission-edit',
                'description' => 'Edit Data Permission'
            ],
            [
                'name' => 'permission-update',
                'description' => 'Update Data Permission'
            ],
            // Role
            [
                'name' => 'role-index',
                'description' => 'Role Data Permission'
            ],
            [
                'name' => 'role-create',
                'description' => 'Role Data Permission'
            ],
            [
                'name' => 'role-store',
                'description' => 'Role Data Permission'
            ],
            [
                'name' => 'role-edit',
                'description' => 'Role Data Permission'
            ],
            [
                'name' => 'role-update',
                'description' => 'Role Data Permission'
            ],
        ]);
    }
}
