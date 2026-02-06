<!--
|--------------------------------------------------------------------------
| Blade View: Email Setting
|--------------------------------------------------------------------------
| Author : Edi Prasetyo
| License: MIT
| Repo   : https://github.com/edi-prasetyo/starter-kit
| Site   : https://grahastudio.com
|--------------------------------------------------------------------------
-->
@extends('layouts.app')
@section('content')
    <div class="container my-3">


        <div class="col-md-8 mx-auto">
            <h3>Email Settings</h3>
            <small class="text-muted">Pengaturan email untuk mengirim verifikasi saat user mendaftar</small>
            <div class="card mb-5 mt-3">
                <div class="card-header">
                    Setup Email
                </div>
                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif

                    <form method="POST" action="{{ route('email-settings.store') }}">
                        @csrf

                        <div class="mb-2">
                            <label>Mailer</label>
                            <input type="text" name="mailer" class="form-control"
                                value="{{ old('mailer', $emailSetting->mailer ?? 'smtp') }}">
                        </div>

                        <div class="mb-2">
                            <label>Host</label>
                            <input type="text" name="host" class="form-control"
                                value="{{ old('host', $emailSetting->host ?? '') }}">
                        </div>

                        <div class="mb-2">
                            <label>Port</label>
                            <input type="number" name="port" class="form-control"
                                value="{{ old('port', $emailSetting->port ?? '') }}">
                        </div>

                        <div class="mb-2">
                            <label>Username</label>
                            <input type="text" name="username" class="form-control"
                                value="{{ old('username', $emailSetting->username ?? '') }}">
                        </div>

                        <div class="mb-2">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control"
                                value="{{ old('password', $emailSetting->password ?? '') }}">
                        </div>

                        <div class="mb-2">
                            <label>Encryption</label>
                            <input type="text" name="encryption" class="form-control"
                                value="{{ old('encryption', $emailSetting->encryption ?? '') }}">
                        </div>

                        <div class="mb-2">
                            <label>From Address</label>
                            <input type="email" name="from_address" class="form-control"
                                value="{{ old('from_address', $emailSetting->from_address ?? '') }}">
                        </div>

                        <div class="mb-3">
                            <label>From Name</label>
                            <input type="text" name="from_name" class="form-control"
                                value="{{ old('from_name', $emailSetting->from_name ?? '') }}">
                        </div>

                        <button class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
