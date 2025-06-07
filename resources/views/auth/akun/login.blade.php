@extends('layouts.frontend')

@section('content')
@php
$title = 'Login - | Absensi Panel Admin';
@endphp
<div class="container d-flex justify-content-center align-items-center min-vh-100">
    <div class="col-md-5">
        <div class="card shadow-lg border-0">
            <div class="card-body p-4">
                <div class="text-center mb-4">
                    <h3 class="fw-bold">Selamat Datang</h3>
                    <p class="text-muted small">Silakan login untuk melanjutkan</p>
                </div>

                @if(session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
                @endif

                <form action="{{ route('login') }}" method="POST">
                    @csrf

                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <div class="input-group">
                            <input type="email" id="email" name="email" class="form-control" placeholder="Masukkan Email Yang Terdaftar" required>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">Kata Sandi</label>
                        <div class="input-group">
                            <input type="password" id="password" name="password" class="form-control" placeholder="Masukkan Password" required>
                        </div>
                    </div>

                    <div class="d-grid mb-3">
                        <button type="submit" class="btn btn-primary">
                            <i class="fa-solid fa-right-to-bracket me-2"></i> Login
                        </button>
                    </div>
                </form>

                <div class="text-center text-muted my-2">atau</div>

                <div class="d-grid mb-2">
                    <a href="{{ route('login.google') }}" class="btn btn-outline-danger">
                        <i class="fa-brands fa-google me-2"></i> Login dengan Google
                    </a>
                </div>
                @if(session('error'))
                <div class="alert alert-danger mt-2 mb-0 p-2 text-center" role="alert">
                    {{ session('error') }}
                </div>
                @endif

                <div class="text-center mt-3">
                    <small class="text-muted">Belum punya akun? <button type="button" data-bs-toggle="modal" data-bs-target="#Hubungi-Kami" class="btn btn-link p-0 m-0 align-baseline">Hubungi Kami</button></small>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@include('auth.akun.modal.hubungi-kami')