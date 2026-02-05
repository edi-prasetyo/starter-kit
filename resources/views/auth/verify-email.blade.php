@extends('layouts.app')
@section('title', 'Verify Email')

@section('content')
    <div class="alert alert-info">
        Silakan cek email untuk verifikasi.
        <form method="POST" action="{{ route('verification.send') }}">
            @csrf
            <button class="btn btn-link p-0">Kirim ulang link verifikasi</button>
        </form>
    </div>
@endsection
