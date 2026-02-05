@extends('layouts.app')
@section('content')
    <h1>Create Permission</h1>

    <form method="POST" action="{{ route('permissions.store') }}">
        @csrf
        <input type="text" name="name" placeholder="permission name">
        <button type="submit">Save</button>
    </form>
@endsection
