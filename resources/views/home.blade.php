@extends('layouts.app')

@section('content')
    <div class="container my-5">
        {{-- HERO SECTION --}}
        <div class="p-5 mb-4 rounded-4 text-white" style="background: linear-gradient(135deg, #6610f2, #0d6efd);">
            <div class="container py-4">
                <div class="row">
                    <div class="col-md-8">
                        <h1 class="display-5 fw-bold">
                            Laravel Starter Kit
                        </h1>
                        <p class="fs-5">
                            Fondasi siap pakai untuk membangun aplikasi web Laravel dengan
                            Authentication, Role & Permission, dan fitur pendukung lainnya.
                        </p>
                        <div class="mt-4">
                            <a href="{{ route('login') }}" class="btn btn-light btn-lg me-2">
                                🔐 Login
                            </a>
                            <a href="{{ route('register') }}" class="btn btn-primary btn-lg">
                                ✨ Register
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <span style="font-size: 150px">🚀</span>
                    </div>
                </div>

            </div>
        </div>

        {{-- FITUR UTAMA --}}
        <div class="row g-4 mb-4">
            <div class="col-md-6 col-lg-3">
                <div class="card card-animated h-100 shadow-sm">
                    <div class="card-body text-center">
                        <div class="fs-1 mb-2">🔑</div>
                        <h5 class="card-title">Authentication</h5>
                        <p class="card-text text-muted">
                            Login & Register lengkap dengan Role dan Permission.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="card card-animated h-100 shadow-sm">
                    <div class="card-body text-center">
                        <div class="fs-1 mb-2">📨</div>
                        <h5 class="card-title">Email Setting</h5>
                        <p class="card-text text-muted">
                            Konfigurasi email untuk verifikasi user.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="card card-animated h-100 shadow-sm">
                    <div class="card-body text-center">
                        <div class="fs-1 mb-2">🥇</div>
                        <h5 class="card-title">Help Center</h5>
                        <p class="card-text text-muted">
                            Panduan penggunaan starter kit.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="card card-animated h-100 shadow-sm">
                    <div class="card-body text-center">
                        <div class="fs-1 mb-2">🛡️</div>
                        <h5 class="card-title">Legal Pages</h5>
                        <p class="card-text text-muted">
                            Terms of Service & Privacy Policy siap pakai.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        {{-- PANDUAN + AKSES --}}
        <div class="row g-4">
            <div class="col-md-8">
                <div class="card shadow-sm">
                    <div class="card-header fw-semibold">
                        📌 Panduan Singkat
                    </div>
                    <div class="card-body">
                        <ul>
                            <li>Kelola akses user menggunakan Role & Permission.</li>
                            <li>Sesuaikan Email Setting untuk verifikasi user.</li>
                            <li>Gunakan struktur ini sebagai fondasi dashboard, CMS, atau aplikasi internal.</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card shadow-sm border-primary">
                    <div class="card-header bg-primary text-white fw-semibold">
                        🔐 Login Awal
                    </div>
                    <div class="card-body">
                        <p class="mb-1"><strong>Email:</strong> <code>superadmin@example.com</code></p>


                        <p class="mt-3 mb-1"><strong>Password:</strong> <code>password</code> </p>

                    </div>
                </div>
            </div>
        </div>

        {{-- CTA BAWAH --}}
        <div class="text-center mt-5">
            <h4 class="fw-bold">Siap Mulai Mengembangkan?</h4>
            <p class="text-muted">
                Tambahkan modul baru dan sesuaikan tampilan sesuai kebutuhan projekmu.
            </p>
            <a href="{{ route('dashboard') }}" class="btn btn-primary btn-lg">
                🚀 Masuk Dashboard
            </a>
        </div>
    </div>
@endsection
