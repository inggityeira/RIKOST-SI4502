<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthManager;
use App\Http\Controllers\halamanController;
use App\Http\Controllers\laundryController;
use App\Http\Controllers\kebersihanController;
use App\Http\Controllers\PembayaranController;

use App\Http\Controllers\pegawaiController;
use App\Http\Controllers\checkoutKebersihanController;


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
Route::get('/servicelaundry', [halamanController::class, 'servicelaundry'])->middleware('isLoggedIn');

// Route::get('/listlaundry', [halamanController::class, 'listlaundry'])->middleware('isLoggedIn')->name('laundry.list');
Route::get('/listlaundry', [LaundryController::class, 'index'])->middleware('isLoggedIn')->name('laundry.list');
// Route::get('/newlaundry', [halamanController::class, 'newlaundry'])->middleware('isLoggedIn');
Route::get('/newlaundry', [LaundryController::class, 'newlaundry'])->middleware('isLoggedIn');
Route::post('/laundry-store', [LaundryController::class, 'store'])->name('laundry.store');


// Route::get('/laundry-new', [LaundryController::class, 'create'])->name('laundry.create');
// Route::post('/laundry-store', [LaundryController::class, 'store'])->name('laundry.store');


// laura
Route::get('/penyewa', [halamanController::class, 'penyewa'])->middleware('isLoggedIn');
Route::get('/createpenyewa', [halamanController::class, 'createpenyewa'])->middleware('isLoggedIn');
Route::get('/updatepenyewa', [halamanController::class, 'updatepenyewa'])->middleware('isLoggedIn');

// rico
Route::get('/kamar', [halamanController::class, 'kamar'])->middleware('isLoggedIn');

// firas
Route::get('/kebersihan', [checkoutKebersihanController::class, 'index'])->middleware('isLoggedIn');
Route::get('/kebersihan-pembayaran/{id}', [checkoutKebersihanController::class, 'show'])->middleware('isLoggedIn');
Route::get('/kebersihan-admin', [kebersihanController::class, 'index'])->middleware('isLoggedIn');
Route::get('/kebersihan-admin-create', [kebersihanController::class, 'create'])->middleware('isLoggedIn');
Route::post('/kebersihan-admin-store', [kebersihanController::class, 'store'])->middleware('isLoggedIn');
Route::delete('/kebersihan-admin/{id}', [kebersihanController::class, 'destroy'])->middleware('isLoggedIn');
Route::get('/kebersihan-admin-edit/{id}', [kebersihanController::class, 'edit'])->middleware('isLoggedIn')->name('kebersihan-admin.edit');
Route::put('/kebersihan-admin-update/{id}', [kebersihanController::class, 'update'])->middleware('isLoggedIn')->name('kebersihan-admin.update');

// nikita
Route::get('/pembayaran', [halamanController::class, 'pembayaran'])->middleware('isLoggedIn');
Route::get('/pembayaran', [halamanController::class, 'pembayaran'])->middleware('isLoggedIn');
Route::get('/pembayaran', [PembayaranController::class, 'index'])->middleware('isLoggedIn');
Route::get('/pembayaran/store', [PembayaranController::class, 'store'])->middleware('isLoggedIn');
Route::get('/pembayaran/edit/{id_pembayaran}', [PembayaranController::class, 'edit'])->middleware('isLoggedIn');
Route::get('/pembayaran/update/{id_pembayaran}', [PembayaranController::class, 'update'])->middleware('isLoggedIn');
Route::get('/pembayaran/destroy/{id_pembayaran}', [PembayaranController::class, 'destroy'])->middleware('isLoggedIn');

// nadya
Route::get('/pegawai', [halamanController::class, 'pegawai'])->middleware('isLoggedIn');
Route::get('/input_pegawai', [halamanController::class, 'input_Pegawai']);
Route::post('/input-data-pegawai', [pegawaiController::class, 'store'])->name('input-data-pegawai');

// lanang
Route::get('/tamu', [halamanController::class, 'tamu'])->middleware('isLoggedIn');
Route::get('/inputTamu', [halamanController::class, 'inputTamu'])->middleware('isLoggedIn')->name('inputTamu');
Route::get('/liatTamu', [halamanController::class, 'liatTamu'])->middleware('isLoggedIn');
