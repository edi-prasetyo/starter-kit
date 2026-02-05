@extends('layouts.app')
@section('title', 'Dashboard')

@section('content')

    <h1>Roles</h1>

    <a href="{{ route('roles.create') }}">+ Add Role</a>

    <ul>
        @foreach ($roles as $role)
            <li>{{ $role->name }}</li>
        @endforeach
    </ul>
@endsection
