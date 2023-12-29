<?php

namespace App\Http\Controllers;

use App\Models\kamar;
use Illuminate\Http\Request;
use App\Models\Tamu;
use App\Models\penyewa;

class TamuController extends Controller
{
    public function createTamu()
    {
        $kamar = kamar::all();
        $penyewa = penyewa::all();
        return view('tamu.createTamu', compact('kamar', 'penyewa'));
    }

    public function store(Request $request)
    {
        $tamu = new Tamu();
        $tamu->id_tamu = $request->idtamu;
        $tamu->nama_tamu = $request->namatamu;
        $tamu->no_hp_tamu = $request->nohptamu;
        $tamu->kartu_identitas = $request->kartu;
        $tamu->waktu_checkin = $request->masuk;
        $tamu->waktu_checkout = $request->keluar;
        $tamu->id_kamar = $request->kamar;
        $tamu->id_penyewa = $request->penyewa;

        $item = $tamu->save();
        if ($item) {
            return back()->with('success', 'Berhasil menambahkan Daftar tamu');
        } else {
            return back()->with('fail', 'Terdapat kesalahan');
        }

    }

    public function index()
    {
        $tamu = Tamu::all();
        $penyewa = penyewa::all();
        return view('tamu.listTamu', compact('tamu', 'penyewa'));
    }

    public function detailTamu($id_tamu)
    {
        $tamu = Tamu::findOrFail($id_tamu);
        $kamar = Kamar::all();
        $penyewa = Penyewa::all();

        return view('tamu.detailTamu', compact('tamu', 'kamar', 'penyewa'));
    }

    public function updateTamu(Request $request, $id_tamu)
    {
        $tamu = Tamu::findOrFail($id_tamu);

        $tamu->nama_tamu = $request->input('namatamu');
        $tamu->no_hp_tamu = $request->input('nohptamu');
        $tamu->kartu_identitas = $request->input('kartu');
        $tamu->waktu_checkin = $request->input('masuk');
        $tamu->waktu_checkout = $request->input('keluar');
        $tamu->id_kamar = $request->input('kamar');
        $tamu->id_penyewa = $request->input('penyewa');

        $tamu->save();

        return redirect()->route('tamu')->with('success', 'Tamu updated successfully');
    }


    public function destroy($id_tamu)
    {
        $tamu = Tamu::find($id_tamu);

        if ($tamu) {
            $tamu->delete();
            return back()->with('success', 'Berhasil menghapus daftar tamu');
        } else {
            return back()->with('fail', 'Terdapat kesalahan saat menghapus');
        }
    }

}
