<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use \App\Http\Controllers\ContactController;

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

Route::get('/', [ContactController::class, 'index'])->name('contacts.index');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/show/{contact}', [ContactController::class, 'show'])->name('contacts.show');
    Route::get('/create', [ContactController::class, 'create'])->name('contacts.create');
    Route::get('/edit/{contact}', [ContactController::class, 'edit'])->name('contacts.edit');
    Route::post('/store', [ContactController::class, 'store'])->name('contacts.store');
    Route::put('/update/{contact}', [ContactController::class, 'update'])->name('contacts.update');
    Route::delete('/delete/{contact}', [ContactController::class, 'destroy'])->name('contacts.destroy');

    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});


Route::get('/login', [AuthController::class, 'loginForm'])->name('loginForm');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::get('/register', [AuthController::class, 'registerForm'])->name('registerForm');
Route::post('/register', [AuthController::class, 'register'])->name('register');

