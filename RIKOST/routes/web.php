<?php

use App\Http\Controllers\TamuController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthManager;
use App\Http\Controllers\halamanController;
use App\Http\Controllers\laundryController;
use App\Http\Controllers\kebersihanController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\penyewaController;
use App\Http\Controllers\kamarController;
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
Route::get('/laundry', [LaundryController::class, 'informasi'])->middleware('isLoggedIn')->name('laundry.list');
Route::get('/newlaundry', [LaundryController::class, 'newlaundry'])->middleware('isLoggedIn')->name('laundry.new');
Route::get('/listlaundry', [LaundryController::class, 'index'])->middleware('isLoggedIn')->name('laundry.list');
Route::get('/servicelaundry', [LaundryController::class, 'service'])->middleware('isLoggedIn')->name('laundry.service');
Route::get('/detaillaundry/{id_laundry}/edit', [LaundryController::class, 'detail'])->middleware('isLoggedIn')->name('laundry.detail');

Route::post('/laundry-store', [LaundryController::class, 'store'])->name('laundry.store');
Route::post('/laundry-update/{id_laundry}', [LaundryController::class, 'update'])->name('laundry.update');
Route::post('/laundry-delete/{id_laundry}', [LaundryController::class, 'delete'])->name('laundry.delete');


// laura
Route::get('/penyewa', [halamanController::class, 'penyewa'])->middleware('isLoggedIn');
Route::get('/createpenyewa', [penyewaController::class, 'create'])->middleware('isLoggedIn')->name('penyewa.create');
Route::get('/updatepenyewa', [halamanController::class, 'updatepenyewa'])->middleware('isLoggedIn');

Route::post('/penyewa-create', [penyewaController::class, 'submit'])->name('penyewa.submit');

// rico
Route::get('/kamar', [KamarController::class, 'index'])->middleware('isLoggedIn')->name('kamar');
Route::get('/kamar-admin-create', [KamarController::class, 'create'])->middleware('isLoggedIn')->name('kamar.create');
Route::post('/kamar-admin-store', [KamarController::class, 'store'])->middleware('isLoggedIn')->name('kamar.add');
Route::delete('/kamar-admin-delete/{id_kamar}', [KamarController::class, 'destroy'])->name('kamar.destroy');
Route::get('/kamar-admin-edit/{id_kamar}', [KamarController::class, 'edit'])->middleware('isLoggedIn')->name('kamar.edit');
Route::get('/kamar-admin-view/{id_kamar}', [KamarController::class, 'view'])->middleware('isLoggedIn')->name('kamar.view');
Route::post('/kamar-admin-update/{id_kamar}', [KamarController::class, 'update'])->middleware('isLoggedIn')->name('kamar.update');

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
Route::get('/pembayaran', [PembayaranController::class, 'index'])->middleware('isLoggedIn')->name('home.pembayaran');
Route::post('/pembayaran/create', [PembayaranController::class, 'store'])->middleware('isLoggedIn')->name('store.pembayaran');
Route::get('/pembayaran/edit/{id_pembayaran}', [PembayaranController::class, 'edit'])->middleware('isLoggedIn');
Route::put('/pembayaran/update/{id_pembayaran}', [PembayaranController::class, 'update'])->middleware('isLoggedIn')->name('update.pembayaran');
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

