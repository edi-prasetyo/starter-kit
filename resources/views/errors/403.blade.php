@extends('layouts.app')

@section('content')
    <div class="text-center mt-8">
        <h1>403 - Akses Ditolak</h1>
        <div class="alert alert-danger" role="alert">
            kamu tidak memiliki Akses ke Halaman ini!
        </div>
        <p>{{ $exception->getMessage() }}</p>
        <a href="{{ url()->previous() }}" class="btn btn-primary mt-4">
            Kembali
        </a>
    </div>
@endsection
