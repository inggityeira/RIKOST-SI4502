<?php

namespace App\Http\Controllers;

use App\Models\layoutkebersihan;

use Illuminate\Http\Request;
use App\Models\laundry;

class halamanController extends Controller
{
    public function laundry()
    {
        return view('laundry.informasiLaundry');
    }

    public function detaillaundry()
    {
        return view('laundry.detailLaundry');
    }

    public function listlaundry()
    {
        return view('laundry.listLaundry');
    }

    public function newlaundry()
    {
        return view('laundry.newLaundry');
    }

    public function servicelaundry()
    {
        return view('laundry.serviceLaundry');
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




    public function pembayaran()
    {
        $list = Pembayaran::all();
        return view('pembayaran.listPembayaran', compact('list'));
    }

    public function pegawai()
    {
        return view('pegawai.listPegawai');
    }

    public function input_Pegawai (){
        return view('pegawai/inputPegawai');
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
