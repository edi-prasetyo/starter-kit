@extends('layouts.app')
@section('content')
    <div class="container py-4">
        <div class="page-wrapper bg-body">

            <h1 class="page-title">Selamat Datang di Laravel Starter Kit</h1>
            <p class="page-subtitle">
                Ini adalah proyek awal yang sudah siap dikembangkan untuk berbagai aplikasi web.
                Starter kit ini dilengkapi fitur dasar yang umum dibutuhkan.
            </p>

            <div class="section">
                <h2 class="section-title">Fitur Utama</h2>
                <div class="card content-text">
                    <ul style="list-style: none; padding-left: 0;">
                        <li>✅ <strong>Authentication (Login/Register)</strong> dengan proteksi Role & Permission Access</li>
                        <li>✅ <strong>App & System Setting</strong> untuk mengatur konfigurasi aplikasi dan sistem</li>
                        <li>✅ <strong>Help Center</strong> untuk panduan penggunaan</li>
                        <li>✅ <strong>Terms of Service</strong> & <strong>Privacy Policy</strong> siap pakai</li>
                    </ul>
                </div>
            </div>

            <div class="section">
                <h2 class="section-title">Panduan Singkat</h2>
                <div class="card content-text">
                    <p>Starter kit ini dibuat agar kamu bisa langsung memulai projek Laravel dan fokus menambahkan fitur
                        sesuai kebutuhan. Beberapa tips:</p>
                    <ul>
                        <li>Eksplorasi fitur Auth dan Role & Permission untuk mengatur akses pengguna.</li>
                        <li>Sesuaikan App & System Setting dengan kebutuhan aplikasi kamu.</li>
                        <li>Gunakan Help Center untuk menambahkan dokumentasi aplikasi kamu sendiri.</li>
                        <li>Update Terms of Service & Privacy Policy sesuai kebijakan aplikasi yang kamu bangun.</li>
                        <li>Gunakan struktur ini sebagai fondasi untuk berbagai proyek web Laravel: dashboard, CMS, aplikasi
                            internal, atau e-commerce.</li>
                    </ul>
                </div>
            </div>

            <div class="section">
                <h2 class="section-title">Mulai Mengembangkan</h2>
                <div class="card content-text">
                    <p>Selanjutnya, kamu bisa langsung menambahkan modul baru, fitur tambahan, atau menyesuaikan tampilan
                        agar sesuai kebutuhan projek. Starter kit ini sudah siap dipakai dan mudah dikembangkan.</p>
                </div>
            </div>

        </div>
    </div>
@endsection

@push('styles')
    <style>
        :root {
            --primary: #4f46e5;
            --primary-soft: #eef2ff;
            --dark: #0f172a;
            --muted: #64748b;
            --border: #e5e7eb;
            --bg: #f8fafc;
            --card-bg: #ffffff;
            --radius: 14px;
        }



        .page-wrapper {
            border-radius: var(--radius);
            padding: 2rem;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.05);
        }

        .page-title {
            font-size: 1.9rem;
            font-weight: 700;
            margin-bottom: 0.5rem;
        }

        .page-subtitle {
            margin-bottom: 2rem;
            font-size: 1rem;
        }

        .section {
            margin-bottom: 2rem;
        }

        .section-title {
            font-size: 1.2rem;
            font-weight: 600;
            margin-bottom: 1rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .section-title::before {
            content: "";
            width: 4px;
            height: 18px;
            background: var(--primary);
            border-radius: 999px;
        }

        .card {
            border-radius: var(--radius);
            padding: 1.5rem;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.04);
        }

        .content-text ul {
            padding-left: 1.25rem;
            margin-bottom: 1rem;
        }

        .content-text li {
            margin-bottom: 0.5rem;
        }
    </style>
@endpush
