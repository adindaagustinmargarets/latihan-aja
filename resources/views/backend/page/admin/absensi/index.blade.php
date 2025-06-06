@extends('layouts.backend')

@section('content')
@php
$title = 'Data List Absensi';
@endphp
<div class="container mt-3">
    <div class="card">
        <div class="card-body">
            <div class="mt-3 mb-3">
                <button type="button" data-bs-toggle="modal" data-bs-target="#Tambah" class="btn btn-primary">Tambah</button>
            </div>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Nama Lengkap</th>
                        <th>Waktu</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($absensi as $data)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $data->nama_lengkap }}</td>
                        <td>{{ $data->waktu }}</td>
                        <td>
                            <button type="button" data-bs-toggle="modal" data-bs-target="#Hapus{{ $data->id }}" class="btn btn-danger">Hapus</button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
@include('backend.page.admin.absensi.modal.tambah-modal')
@foreach($absensi as $data)
@include('backend.page.admin.absensi.modal.hapus-modal')
@endforeach