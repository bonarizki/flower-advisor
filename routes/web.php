<?php

use App\Http\Controllers\ApotekerController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\UserController;
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

Route::get('logout', [LoginController::class, 'logout'])->name('logout');

Route::middleware('guest')->group(function (){
    Route::get('/', [LoginController::class, 'index'])->name('login-view');

    Route::post('login', [LoginController::class, 'login'])->name('login');

    Route::get('register', [RegisterController::class, 'index'])->name('register');
    Route::post('register', [RegisterController::class, 'register'])->name('register.post');
});



Route::middleware('auth')->group(function () {
    Route::get("landing-page",function(){
        return view('landing-page');
    })->name('landing-page');
});

