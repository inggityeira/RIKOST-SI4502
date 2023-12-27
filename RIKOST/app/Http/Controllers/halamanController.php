<?php

namespace App\Http\Controllers;

use App\Models\layoutkebersihan;

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

    public function createpenyewa()
    {
        return view('penyewa.create');
    }

    public function updatepenyewa()
    {
        return view('penyewa.update');
    }

    public function kamar()
    {
        return view('kamar.listKamar');
    }

    public function kebersihan()
    {
        $datas = layoutkebersihan::all();
        return view('kebersihan.index', compact('datas'));
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
