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

Route::get('/', function () {
    return view('home');
});

Route::get('/laundry', function () {
    return view('laundry.listLaundry');
});

// Firas
Route::get('/kebersihan', function () {
    return view('kebersihan.index');
});
//firas
Route::get('/kebersihan-pembayaran', function () {
    return view('kebersihan.pembayaran');
});




Route::get('/penyewa', function () {
    return view('penyewa.listPenyewa');
});

Route::get('/kamar', function () {
    return view('kamar.listKamar');
});

Route::get('/pembayaran', function () {
    return view('pembayaran.listPembayaran');
});

Route::get('/Pegawai', function () {
    return view('pegawai.listPegawai');
});

Route::get('/listPegawai', function () {
    return view('pegawai.listPegawai');
});

Route::get('/tamu', function () {
    return view('tamu.listTamu');
});

Route::get('/inputTamu', function () {
    return view('tamu.createTamu');
});

Route::get('/liatTamu', function () {
    return view('tamu.detailTamu');
});
