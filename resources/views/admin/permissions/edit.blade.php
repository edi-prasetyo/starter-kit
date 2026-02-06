@extends('layouts.app')
@section('content')
    <div class="col-md-6 mx-auto">
        <div class="card">
            <div class="card-header">
                Edit Permission
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('permissions.update', $permission->id) }}">
                    @csrf
                    @method('PUT')
                    <div class="form-group mb-3">
                        <label class="form-label">Nama Permission</label>
                        <input type="text" name="name" value="{{ old('name', $permission->name) }}" class="form-control"
                            required>
                    </div>
                    <button class="btn btn-primary" type="submit">Update</button>
                </form>
            </div>
        </div>
    </div>
@endsection
