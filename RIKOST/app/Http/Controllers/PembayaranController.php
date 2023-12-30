<?php

namespace App\Http\Controllers;
use App\Models\Pembayaran;
use App\Models\penyewa;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class PembayaranController extends Controller
{
    public function index(){
        $list = Pembayaran::with('penyewa')->get();
        return view('pembayaran.listPembayaran', compact('list'));
    }
    public function store(Request $request){
        $tanggalFormatBaru = Carbon::createFromFormat('Y-m-d', $request->tgl_pembayaran)->format('Y-m-d');
        // dd($tanggalFormatBaru);
        $pembayaran =  Pembayaran::create([
            'id_penyewa' => $request->id_penyewa,
            'tgl_pembayaran' => $tanggalFormatBaru,
            'termin_pembayaran' => $request->termin_pembayaran,
            'nominal_pembayaran' => $request->nominal_pembayaran, 
            'aspek_pembayaran' => $request->aspek_pembayaran,
            'metode_pembayaran' => $request->metode_pembayaran,
            'status_pembayaran' => $request->status_pembayaran,
        ]);
        // return redirect('/pembayaran');
        
        // $pembayaran = Pembayaran::create($request->all());

        return redirect()->route('home.pembayaran')->with('success','pembayaran berhasil ditambahkan');

    }
    public function edit($id_pembayaran){
        $list = Pembayaran::where('id_pembayaran', '=', $id_pembayaran)->get();
        return view('pembayaran.editPembayaran', compact('list'));
    }
    public function update(Request $request, $id_pembayaran){
        Pembayaran::where('id_pembayaran', '=', $id_pembayaran)->update([
            'id_penyewa' => $request->id_penyewa,
            'tgl_pembayaran' => $request->tgl_pembayaran,
            'termin_pembayaran' => $request->termin_pembayaran,
            'nominal_pembayaran' => $request->nominal_pembayaran,
            'aspek_pembayaran' => $request->aspek_pembayaran,
            'metode_pembayaran' => $request->metode_pembayaran,
            'status_pembayaran' => $request->status_pembayaran,
        ]);
        return redirect('/pembayaran');
    }
    public function destroy($id_pembayaran){
        Pembayaran::where('id_pembayaran', '=', $id_pembayaran)->delete();
        return redirect('/pembayaran');
    }
}

