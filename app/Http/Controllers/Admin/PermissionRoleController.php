<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\Permission;
use Illuminate\Http\Request;

class PermissionRoleController extends Controller
{
    public function edit(Role $role)
    {
        $this->authorize('permissionRole-edit');
        $role->load('permissions');

        $permissions = Permission::all()
            ->groupBy(function ($permission) {
                return explode('-', $permission->name)[0];
            });

        return view('admin.permission_roles.edit', compact('role', 'permissions'));
    }
    public function update(Request $request, Role $role)
    {
        $this->authorize('permissionRole-update');

        $role->permissions()->sync(
            $request->input('permissions', [])
        );

        return redirect()
            ->route('roles.index')
            ->with('success', 'Permission role berhasil diperbarui');
    }
}
