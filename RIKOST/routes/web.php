<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthManager;
use App\Http\Controllers\halamanController;

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

// general

Route::get('/', [AuthManager::class, 'login'])->middleware('alreadyLoggedIn');
Route::get('/signup', [AuthManager::class, 'signup'])->middleware('alreadyLoggedIn');
Route::post('/signup-user', [AuthManager::class, 'signupUser'])->name('signup-user');
Route::post('/login-user', [AuthManager::class, 'loginUser'])->name('login-user');
Route::get('/home', [AuthManager::class, 'home'])->middleware('isLoggedIn');
Route::get('/logout', [AuthManager::class, 'logout']);

Route::get('/landing', function () {
    return view('landing.landing');
});

// inggit
Route::get('/laundry', [halamanController::class, 'laundry'])->middleware('isLoggedIn');

// laura
Route::get('/penyewa', [halamanController::class, 'penyewa'])->middleware('isLoggedIn');

// rico
Route::get('/kamar', [halamanController::class, 'kamar'])->middleware('isLoggedIn');

// firas
Route::get('/kebersihan', [halamanController::class, 'kebersihan'])->middleware('isLoggedIn');
Route::get('/kebersihan-pembayaran', [halamanController::class, 'kebersihanpembayaran'])->middleware('isLoggedIn');

// nikita
Route::get('/pembayaran', [halamanController::class, 'pembayaran'])->middleware('isLoggedIn');

// nadya
Route::get('/pegawai', [halamanController::class, 'pegawai'])->middleware('isLoggedIn');

// lanang
Route::get('/tamu', [halamanController::class, 'tamu'])->middleware('isLoggedIn');
Route::get('/inputTamu', [halamanController::class, 'inputTamu'])->middleware('isLoggedIn');
Route::get('/liatTamu', [halamanController::class, 'liatTamu'])->middleware('isLoggedIn');
