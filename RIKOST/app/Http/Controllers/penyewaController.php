<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\penyewa;
use App\Models\kamar;

class penyewaController extends Controller
{
    public function create(){
        $kamar = kamar::all();
        return view('penyewa.create', compact('kamar'));
    }

    public function submit(Request $request){
        $penyewa = new penyewa();
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
        $penyewa = penyewa::all();

        return view('penyewa.penyewa', compact('penyewa'));
    }
}
