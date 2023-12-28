<?php

namespace App\Http\Controllers;
use App\Models\Pembayaran;
use App\Models\Penyewa;

use Illuminate\Http\Request;

class PembayaranController extends Controller
{
    public function index(){
        $list = Pembayaran::all();
        return view('pembayaran.listPembayaran', compact('list'));
    }
    public function store(Request $request){
        Pembayaran::create([
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

