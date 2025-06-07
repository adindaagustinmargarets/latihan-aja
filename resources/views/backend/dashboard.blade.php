@extends('layouts.backend')

@section('content')
@php
$title = 'Dashboard';
@endphp

<div class="container mt-4">
    <div class="row mb-4">
        <div class="col">
            <h3 class="fw-bold">Selamat Datang di Dashboard</h3>
            <p class="text-muted">Panel kontrol utama untuk mengelola sistem absensi.</p>
        </div>
    </div>

    {{-- Statistik Mini --}}
    <div class="row">
        <div class="col-md-4 mb-3">
            <div class="card border-primary shadow-sm">
                <div class="card-body">
                    <h5 class="card-title text-primary"><i class="fas fa-user-check me-2"></i>Total Absensi Hari Ini</h5>
                    <h3 class="fw-bold">125</h3>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="card border-success shadow-sm">
                <div class="card-body">
                    <h5 class="card-title text-success"><i class="fas fa-users me-2"></i>Total Pengguna</h5>
                    <h3 class="fw-bold">58</h3>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="card border-warning shadow-sm">
                <div class="card-body">
                    <h5 class="card-title text-warning"><i class="fas fa-calendar-alt me-2"></i>Jadwal Aktif</h5>
                    <h3 class="fw-bold">12</h3>
                </div>
            </div>
        </div>
    </div>

    {{-- Info Tambahan --}}
    <div class="card mt-4">
        <div class="card-body">
            <h5 class="card-title fw-semibold">Informasi Sistem</h5>
            <p class="card-text">
                Sistem absensi ini dibuat untuk memudahkan pencatatan kehadiran secara digital. Gunakan menu navigasi di sidebar untuk mengakses fitur-fitur lainnya.
            </p>
        </div>
    </div>
</div>
@endsection