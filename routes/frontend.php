<?php

use Illuminate\Support\Facades\Route;

Route::get('/beranda', [App\Http\Controllers\Frontend\Page\BerandaController::class, 'index']);
