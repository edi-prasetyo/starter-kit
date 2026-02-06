@extends('layouts.app')
@section('content')
    <div class="col-md-6 mx-auto">
        <div class="card">
            <div class="card-header">
                Create Role
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('roles.store') }}">
                    @csrf
                    <div class="form-group mb-3">
                        <label class="form-label">Nama Role</label>
                        <input type="text" name="name" class="form-control" placeholder="role name">
                    </div>

                    <button class="btn btn-primary" type="submit">Save</button>
                </form>
            </div>
        </div>
    </div>
@endsection
