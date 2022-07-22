<?php

use App\Http\Controllers\StatuController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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


Route::get('/', [StatuController::class, 'index'])->name('index')->middleware('auth');
Route::prefix('Socialbook')->group(function () {
    Route::prefix('login')->group(function () {
        Route::get('/register', [UserController::class, 'register'])->name('register');
        Route::post('/add', [UserController::class, 'add'])->name('add');
        Route::get('/logout', [UserController::class, 'logout'])->name('logout');
        Route::get('/login', [UserController::class, 'login'])->name('login');
        Route::post('/loginProcessing', [UserController::class, 'loginProcessing'])->name('loginProcessing');
    });
    Route::prefix('status')->group(function () {
        Route::post('/upstatus', [StatuController::class, 'store'])->name('upstatus');
        Route::get('/create', [StatuController::class, 'create'])->name('create');
    });
});
