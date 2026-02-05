@extends('layouts.app')
@section('content')
    <h1>Role Permission</h1>

    @foreach ($roles as $role)
        <h3>{{ $role->name }}</h3>

        <form method="POST" action="{{ route('role-permissions.update', $role) }}">
            @csrf
            @method('PUT')

            @foreach ($permissions as $permission)
                <label>
                    <input type="checkbox" name="permissions[]" value="{{ $permission->id }}"
                        {{ $role->permissions->contains($permission) ? 'checked' : '' }}>
                    {{ $permission->name }}
                </label>
                <br>
            @endforeach

            <button type="submit">Save</button>
        </form>
    @endforeach
@endsection
