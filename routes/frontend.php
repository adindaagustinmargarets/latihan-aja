<?php

use Illuminate\Support\Facades\Route;

Route::get('/login', [App\Http\Controllers\Auth\Akun\AkunController::class, 'login_view'])->name('login');
Route::post('/login', [App\Http\Controllers\Auth\Akun\AkunController::class, 'login']);
Route::group(['prefix' => '', 'middleware' => ['auth']], function () {
    Route::get('/', [App\Http\Controllers\Frontend\Page\BerandaController::class, 'index']);
});
