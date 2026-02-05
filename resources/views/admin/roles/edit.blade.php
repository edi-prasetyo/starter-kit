@extends('layouts.app')

@section('content')
    <div class="col-md-6 mx-auto">
        <div class="card">
            <div class="card-header">
                <h3>Edit Role</h3>
            </div>
            <div class="card-body">

                <form action="{{ route('roles.update', $role) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label class="form-label">Role Name</label>
                        <input type="text" name="name" class="form-control" value="{{ old('name', $role->name) }}"
                            required>
                    </div>

                    <button class="btn btn-warning">Update</button>
                    <a href="{{ route('roles.index') }}" class="btn btn-secondary">Back</a>
                </form>
            </div>
        </div>
    </div>
@endsection
