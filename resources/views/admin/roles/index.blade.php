@extends('layouts.app')

@section('content')
    <div class="container my-4">

        <div class="d-flex justify-content-between align-items-center mb-3">
            <div>
                <h3>Roles</h3>
                <small class="text-muted">Data role untuk user</small>
            </div>

            <a href="{{ route('roles.create') }}" class="btn btn-primary">
                + Add Role
            </a>
        </div>

        <div class="card">
            <div class="card-header">
                Roles
            </div>

            <div class="table-responsive">
                <table class="table table-striped table-hover align-middle">
                    <thead class="table-dark">
                        <tr>
                            <th style="width: 60px;">#</th>
                            <th>Role Name</th>
                            <th style="width: 180px;" class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($roles as $index => $role)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $role->name }}</td>
                                <td class="text-center">
                                    <a href="{{ route('roles.edit', $role->id) }}" class="btn btn-sm btn-warning me-1">
                                        Edit
                                    </a>

                                    <form action="{{ route('roles.destroy', $role->id) }}" method="POST" class="d-inline"
                                        onsubmit="return confirm('Yakin ingin menghapus role ini?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger">
                                            Delete
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="3" class="text-center text-muted">
                                    No roles found.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>

    </div>
@endsection
