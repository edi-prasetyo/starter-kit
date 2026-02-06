<!--
|--------------------------------------------------------------------------
| Blade View: Create Permission
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
                    Create Permission
                </div>
                <div class="card-body">

                    <form method="POST" action="{{ route('permissions.store') }}">
                        @csrf
                        <div class="form-group mb-3">
                            <label class="form-label">Nama Permission</label>
                            <input type="text" name="name" class="form-control" placeholder="permission-name">
                        </div>

                        <button class="btn btn-primary" type="submit">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
