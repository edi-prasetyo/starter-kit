<?php

/**
 * @author Edi Prasetyo
 * @license MIT
 * @link https://github.com/edi-prasetyo/starter-kit
 * @see https://grahastudio.com
 */

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function index()
    {
        $this->authorize('role-index');
        $roles = Role::all();
        return view('admin.roles.index', compact('roles'));
    }

    public function create()
    {
        $this->authorize('role-create');
        return view('admin.roles.create');
    }

    public function store(Request $request)
    {
        $this->authorize('role-store');
        $request->validate([
            'name' => 'required|unique:roles,name'
        ]);

        Role::create($request->only('name'));

        return redirect()->route('roles.index')
            ->with('success', 'Role created');
    }
    public function edit(Role $role)
    {
        $this->authorize('role-edit');
        return view('admin.roles.edit', compact('role'));
    }

    public function update(Request $request, Role $role)
    {
        $this->authorize('role-update');
        $request->validate([
            'name' => 'required|string|max:255|unique:roles,name,' . $role->id
        ]);

        $role->update([
            'name' => $request->name
        ]);

        return redirect()->route('roles.index')
            ->with('success', 'Role berhasil diupdate');
    }

    public function destroy(Role $role)
    {
        $this->authorize('role-delete');
        $role->delete();

        return redirect()->route('roles.index')
            ->with('success', 'Role berhasil dihapus');
    }
}
