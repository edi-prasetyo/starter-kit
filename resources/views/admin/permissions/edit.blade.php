<!--
|--------------------------------------------------------------------------
| Blade View: Edit Permission
|--------------------------------------------------------------------------
| Author : Edi Prasetyo
| License: MIT
| Repo   : https://github.com/edi-prasetyo/starter-kit
| Site   : https://grahastudio.com
|--------------------------------------------------------------------------
-->
@extends('layouts.app')
@section('content')
    <div class="container my-5">
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
                            <input type="text" name="name" value="{{ old('name', $permission->name) }}"
                                class="form-control" required>
                        </div>
                        <button class="btn btn-primary" type="submit">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
