<?php

use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;



/*
|--------------------------------------------------------------------------
| SUU Routes
|--------------------------------------------------------------------------
|
| Here is routes to auth with SUU and there attributes
|
*/

Route::middleware('guest')->group(function () {
    Route::post('suu-login', [LoginController::class, 'login'])->name('suu.login');
});


Route::middleware('auth')->group(function () {
    Route::get('suu-logout', [LoginController::class, 'logout'])->name('suu.logout');
});