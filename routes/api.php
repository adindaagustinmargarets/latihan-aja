<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/absensi', [App\Http\Controllers\Backend\Page\Absensi\AbsensiController::class, 'absensi_json']);
Route::post('/absensi', [App\Http\Controllers\Backend\Page\Absensi\AbsensiController::class, 'absensi']);
Route::delete('/absensi/reset', [App\Http\Controllers\Backend\Page\Absensi\AbsensiController::class, 'reset_absensi']);
