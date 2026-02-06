@extends('layouts.app')
@section('title', 'Forgot Password')

@section('content')
    <div class="container my-5">
        <div class="col-md-6 mx-auto">
            <div class="card">
                <div class="card-header">
                    <h5>Lupa Password</h5>
                </div>
                <div class="card-body">

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" name="email" class="form-control" value="{{ old('email') }}"
                                placeholder="Masukan Email">
                            @error('email')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <button class="btn btn-primary">Kirim Link Reset</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
