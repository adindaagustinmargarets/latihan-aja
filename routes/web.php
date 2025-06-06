<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::group(['prefix' => '', 'middleware' => ['auth']], function () {
    Route::get('/dashboard', [App\Http\Controllers\Backend\Page\DashbaordController::class, 'dashboard']);
});
Route::group(['prefix' => 'backend/admin', 'middleware' => ['admin']], function () {
    Route::get('/absensi', [App\Http\Controllers\Backend\Page\Admin\AbsensiController::class, 'index']);
    Route::post('/absensi/tambah', [App\Http\Controllers\Backend\Page\Admin\AbsensiController::class, 'tambah'])->name('backend.absensi.tambah');
    Route::delete('/absensi/hapus/{id}', [App\Http\Controllers\Backend\Page\Admin\AbsensiController::class, 'hapus'])->name('backend.absensi.hapus');
});
