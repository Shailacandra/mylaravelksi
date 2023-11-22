<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginRegisterController;
use App\Http\Controllers\infController;


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

Route::get('/', function () {return view('home');});

Route::get('/auth/login', [LoginRegisterController::class, 'login'])->name('auth.login');
Route::get('/auth/register', [LoginRegisterController::class, 'register'])->name('auth.register');
Route::get('/auth/beritaKSI', [infController::class, 'beritaKSI'])->name('inf.beritaKSI');
Route::get('/inf/profileDosen', [LoginRegisterController::class, 'profileDosen'])->name('inf.profileDosen');
Route::get('/inf/profilekelulusanKSI', [LoginRegisterController::class, 'profilekelulusanKSI'])->name('inf.profilekelulusanKSI');
Route::get('/user/home', [LoginRegisterController::class, 'userHome'])->name('user.home');
Route::get('/admin/home', [LoginRegisterController::class, 'adminHome'])->name('admin.home');