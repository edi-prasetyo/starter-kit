@extends('layouts.app')
@section('title', 'Verify Email')

@section('content')
    <div class="col-md-6 mx-auto">
        <div class="card">
            <div class="card-header">
                <h5>Reset Password</h5>
            </div>
            <div class="card-body">
                <div class="alert alert-info">
                    Silakan cek email untuk verifikasi.
                    <form method="POST" action="{{ route('verification.send') }}">
                        @csrf
                        <button class="btn btn-link p-0">Kirim ulang link verifikasi</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
