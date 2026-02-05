@extends('layouts.app')

@section('content')
    <div class="container my-4">

        <div class="d-flex justify-content-between align-items-center mb-3">
            <h3>Permissions</h3>
            <a href="{{ route('permissions.create') }}" class="btn btn-primary">
                + Add Permission
            </a>
        </div>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <div class="table-responsive">
            <table class="table table-striped table-hover align-middle">
                <thead>
                    <tr>
                        <th style="width:60px">#</th>
                        <th>Permission Name</th>
                        <th style="width:180px" class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($permissions as $index => $permission)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $permission->name }}</td>
                            <td class="text-center">
                                <a href="{{ route('permissions.edit', $permission) }}" class="btn btn-sm btn-warning me-1">
                                    Edit
                                </a>

                                <form action="{{ route('permissions.destroy', $permission) }}" method="POST"
                                    class="d-inline" onsubmit="return confirm('Yakin hapus permission ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-sm btn-danger">
                                        Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="3" class="text-center text-muted">
                                Tidak ada data permission
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

    </div>
@endsection
