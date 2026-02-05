@extends('layouts.app')
@section('content')
    <h1>Create Role</h1>

    <form method="POST" action="{{ route('admin.roles.store') }}">
        @csrf
        <input type="text" name="name" placeholder="role name">
        <button type="submit">Save</button>
    </form>
@endsection
