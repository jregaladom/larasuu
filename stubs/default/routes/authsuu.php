<?php

use App\Http\Controllers\AuthSUU\LoginController;
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
