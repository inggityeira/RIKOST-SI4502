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

Route::get('/cabang', function () {
    return view('cabang.listCabang');
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

Route::get('/pegawai', function () {
    return view('pegawai.listPegawai');
});

Route::get('/tamu', function () {
    return view('tamu.listTamu');
});
