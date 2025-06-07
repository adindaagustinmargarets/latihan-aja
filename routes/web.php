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

Route::get('login/google', [App\Http\Controllers\Auth\GoogleController::class, 'redirectToGoogle'])->name('login.google');
Route::get('login/google/callback', [App\Http\Controllers\Auth\GoogleController::class, 'handleGoogleCallback']);

Route::group(['prefix' => '', 'middleware' => ['auth']], function () {
    Route::get('/dashboard', [App\Http\Controllers\Backend\Page\DashbaordController::class, 'dashboard'])->name('dashboard');
});
Route::group(['prefix' => 'backend/admin', 'middleware' => ['admin']], function () {
    Route::get('/absensi', [App\Http\Controllers\Backend\Page\Admin\AbsensiController::class, 'index']);
    Route::post('/absensi/tambah', [App\Http\Controllers\Backend\Page\Admin\AbsensiController::class, 'tambah'])->name('backend.absensi.tambah');
    Route::delete('/absensi/hapus/{id}', [App\Http\Controllers\Backend\Page\Admin\AbsensiController::class, 'hapus'])->name('backend.absensi.hapus');
    //User
    Route::get('user', [App\Http\Controllers\Backend\Page\Admin\UserController::class, 'index'])->name('backend.admin.user');
});
