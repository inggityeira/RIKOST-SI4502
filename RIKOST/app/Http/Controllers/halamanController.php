<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class halamanController extends Controller
{
    public function laundry()
    {
        return view('laundry.listLaundry');
    }

    public function penyewa()
    {
        return view('penyewa.listPenyewa');
    }

    public function kamar()
    {
        return view('kamar.listKamar');
    }

    public function kebersihan()
    {
        return view('kebersihan.index');
    }

    public function kebersihanpembayaran()
    {
        return view('kebersihan.pembayaran');
    }

    public function pembayaran()
    {
        return view('pembayaran.listPembayaran');
    }

    public function pegawai()
    {
        return view('pegawai.listPegawai');
    }

    public function tamu()
    {
        return view('tamu.listTamu');
    }

    public function inputTamu()
    {
        return view('tamu.createTamu');
    }

    public function liatTamu()
    {
        return view('tamu.detailTamu');
    }
}
