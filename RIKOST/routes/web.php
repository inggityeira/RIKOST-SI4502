<?php

use App\Http\Controllers\TamuController;
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
// Route::get('/detaillaundry', [halamanController::class, 'detaillaundry'])->middleware('isLoggedIn');
Route::get('/servicelaundry', [halamanController::class, 'servicelaundry'])->middleware('isLoggedIn');
Route::get('/listlaundry', [LaundryController::class, 'index'])->middleware('isLoggedIn')->name('laundry.list');
// Route::get('/detaillaundry', [LaundryController::class, 'detail'])->middleware('isLoggedIn')->name('laundry.detail');
// Route::get('/detaillaundry/{id_laundry}', [LaundryController::class, 'detail'])->name('laundry.detail');
Route::get('/newlaundry', [LaundryController::class, 'newlaundry'])->middleware('isLoggedIn');
Route::post('/laundry-store', [LaundryController::class, 'store'])->name('laundry.store');


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
Route::get('/tamu', [TamuController::class, 'index'])->middleware('isLoggedIn')->name('tamu');
Route::get('/createTamu', [TamuController::class, 'createTamu'])->middleware('isLoggedIn')->name('createTamu');
Route::get('/liatTamu', [TamuController::class, 'liatTamu'])->middleware('isLoggedIn')->name('liatTamu');
Route::post('/tamu-store', [TamuController::class, 'store'])->name('tamu.store');
Route::delete('/tamu/{id_tamu}', [TamuController::class, 'destroy'])->name('tamu.destroy');
Route::get('/detailTamu/{id_tamu}', [TamuController::class, 'detailTamu'])->middleware('isLoggedIn')->name('detailTamu');
Route::put('/updateTamu/{id_tamu}', [TamuController::class, 'updateTamu'])->middleware('isLoggedIn')->name('updateTamu');

