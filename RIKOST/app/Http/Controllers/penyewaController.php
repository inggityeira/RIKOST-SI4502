<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\penyewa;
use App\Models\laundry;
use App\Models\kamar;

class penyewaController extends Controller
{
    public function penyewa(){
        $kamar = kamar::all();
        $laundry = laundry::all();
        return view('penyewa.penyewa', compact('kamar', 'laundry'));
    }

    public function store(Request $request){
        $penyewa = new listPenyewa();
        $penyewa->id_penyewa = $request->id_penyewa;
        $penyewa->nama_penyewa = $request->nama_penyewa;
        $penyewa->kontak_penyewa = $request->kontak_penyewa;
        $penyewa->NIK_penyewa = $request->NIK_penyewa;
        $penyewa->nama_ortu = $request->nama_ortu;
        $penyewa->kontak_ortu = $request->kontak_ortu;
        $penyewa->waktu_sewa = $request->waktu_sewa;
        $penyewa->id_kamar = $request->id_kamar;
        $penyewa->fasilitas_umum = $request->fasilitas_umum;

        $penyewa->save();
        return redirect()->route('penyewa.penyewa')->with('success', 'Data saved successfully!');

    }

    public function index(){
        $penyewa = listPenyewa::all();

        return view('penyewa.listPenyewa', compact('penyewa'));
    }
}
