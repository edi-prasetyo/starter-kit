<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;




class SuperAdminUserSeeder extends Seeder
{
    public function run()
    {
        $superadminRole = Role::where('name', 'superadmin')->firstOrFail();

        User::updateOrCreate(
            [
                'email' => 'superadmin@example.com',
            ],
            [
                'name' => 'Super Admin',
                'password' => Hash::make('password'),
                'role_id' => $superadminRole->id,
                'email_verified_at' => now()
            ]
        );
    }
}
