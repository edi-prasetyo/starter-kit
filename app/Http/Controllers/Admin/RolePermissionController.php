<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\Permission;
use Illuminate\Http\Request;

class RolePermissionController extends Controller
{
    public function index()
    {
        $roles = Role::with('permissions')->get();
        $permissions = Permission::all();

        return view(
            'admin.role_permissions.index',
            compact('roles', 'permissions')
        );
    }

    public function update(Request $request, Role $role)
    {
        $role->permissions()->sync(
            $request->input('permissions', [])
        );

        return back()->with('success', 'Permissions updated');
    }
}
