<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthManager;
use App\Http\Controllers\halamanController;
use App\Http\Controllers\kebersihanController;

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
Route::get('/detaillaundry', [halamanController::class, 'detaillaundry'])->middleware('isLoggedIn');
Route::get('/listlaundry', [halamanController::class, 'listlaundry'])->middleware('isLoggedIn');
Route::get('/newlaundry', [halamanController::class, 'newlaundry'])->middleware('isLoggedIn');
Route::get('/servicelaundry', [halamanController::class, 'servicelaundry'])->middleware('isLoggedIn');

// rico
Route::get('/kamar', [halamanController::class, 'kamar'])->middleware('isLoggedIn');

// firas
Route::get('/kebersihan', [halamanController::class, 'kebersihan'])->middleware('isLoggedIn');
Route::get('/kebersihan-pembayaran', [halamanController::class, 'kebersihanpembayaran'])->middleware('isLoggedIn');
Route::get('/kebersihan-admin', [kebersihanController::class, 'index'])->middleware('isLoggedIn');
Route::get('/kebersihan-admin-create', [kebersihanController::class, 'create'])->middleware('isLoggedIn');
Route::post('/kebersihan-admin-store', [kebersihanController::class, 'store'])->middleware('isLoggedIn');
Route::delete('/kebersihan-admin/{id}', [kebersihanController::class, 'destroy'])->middleware('isLoggedIn');
Route::get('/kebersihan-admin-edit/{id}', [kebersihanController::class, 'edit'])->middleware('isLoggedIn')->name('kebersihan-admin.edit');
Route::put('/kebersihan-admin-update/{id}', [kebersihanController::class, 'update'])->middleware('isLoggedIn')->name('kebersihan-admin.update');

// nikita
Route::get('/pembayaran', [halamanController::class, 'pembayaran'])->middleware('isLoggedIn');

// nadya
Route::get('/pegawai', [halamanController::class, 'pegawai'])->middleware('isLoggedIn');

// lanang
Route::get('/tamu', [halamanController::class, 'tamu'])->middleware('isLoggedIn');
Route::get('/inputTamu', [halamanController::class, 'inputTamu'])->middleware('isLoggedIn');
Route::get('/liatTamu', [halamanController::class, 'liatTamu'])->middleware('isLoggedIn');
