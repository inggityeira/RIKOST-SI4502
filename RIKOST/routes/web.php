<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthManager;

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
// Route::get('/', function () {
//     return view('landing.login');
// });

Route::get('/', [AuthManager::class, 'login'])->middleware('alreadyLoggedIn');
Route::get('/signup', [AuthManager::class, 'signup'])->middleware('alreadyLoggedIn');
Route::post('/signup-user', [AuthManager::class, 'signupUser'])->name('signup-user');
Route::post('/login-user', [AuthManager::class, 'loginUser'])->name('login-user');
Route::get('/home', [AuthManager::class, 'home'])->middleware('isLoggedIn');
Route::get('/logout', [AuthManager::class, 'logout']);

Route::get('/landing', function () {
    return view('landing.landing');
});

// Route::get('/signup', function () {
//     return view('landing.signup');
// });

// Route::get('/home', function () {
//     return view('home');
// });


// inggit
Route::get('/laundry', function () {
    return view('laundry.listLaundry');
});

// laura
Route::get('/penyewa', function () {
    return view('penyewa.listPenyewa');
});


// rico
Route::get('/kamar', function () {
    return view('kamar.listKamar');
});

// firas
Route::get('/kebersihan', function () {
    return view('kebersihan.index');
});
Route::get('/kebersihan-pembayaran', function () {
    return view('kebersihan.pembayaran');
});


// nikita
Route::get('/pembayaran', function () {
    return view('pembayaran.listPembayaran');
});

// nadya
Route::get('/pegawai', function () {
    return view('pegawai.listPegawai');
});

// lanang
Route::get('/tamu', function () {
    return view('tamu.listTamu');
});

Route::get('/inputTamu', function () {
    return view('tamu.createTamu');
});

Route::get('/liatTamu', function () {
    return view('tamu.detailTamu');
});
