<?php

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

// general
Route::get('/', function () {
    return view('landing.login');
});

Route::get('/signup', function () {
    return view('landing.signup');
});

Route::get('/home', function () {
    return view('home');
});


// inggit
Route::get('/laundry', function () {
    return view('laundry.listLaundry');
});

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
Route::get('/Pegawai', function () {
    return view('pegawai.listPegawai');
});

Route::get('/listPegawai', function () {
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
