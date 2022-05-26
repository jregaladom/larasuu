<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Template\LoginController;
use App\Http\Controllers\Template\MainController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Routes without Auth
Route::middleware('guest')->group(function () {
    Route::get('/', [LoginController::class, 'login'])->name('login');
    Route::get('/login', [LoginController::class, 'login'])->name('login');
});

//Routes with Auth
Route::middleware('auth')->group(function () {
    Route::get('/', [MainController::class, 'index'])->name('home');
    Route::get('/home', [MainController::class, 'index'])->name('home');
});
