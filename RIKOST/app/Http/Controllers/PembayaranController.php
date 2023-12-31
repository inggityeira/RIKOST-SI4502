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

        $request->validate([
            'id_penyewa' => 'required|string',
            'tgl_pembayaran' => 'required|date',
            'termin_pembayaran' => 'required|in:Select the preferred payment terms,Satu,Dua',
            'nominal_pembayaran' => 'required|numeric',
            'aspek_pembayaran' => 'required|in:Choose the payment aspect you will pay,Kosan Tipe Kamar Suite, Kosan Tipe Kamar Medium, Kosan Tipe Kamar Reguler, Laundry, Kebersihan',
            'metode_pembayaran' => 'required|string',
            'status_pembayaran' => 'required|in:Select the status, Belum Lunas, Lunas, Dibatalkan',
        ], [
            'required' => 'Column :attribute must be filled in.',
            'date' => 'Column :attribute must be in date format.',
            'in' => 'Column :attribute must select one of the available options.',
            'numeric' => 'Column :attribute must be a numeric.',
            'string' => 'Column :attribute must be a text.'

        ]);

        $tanggalFormatBaru = Carbon::createFromFormat('Y-m-d', $request->tgl_pembayaran)->format('Y-m-d');
        $pembayaran =  Pembayaran::create([
            'id_penyewa' => $request->id_penyewa,
            'tgl_pembayaran' => $tanggalFormatBaru,
            'termin_pembayaran' => $request->termin_pembayaran,
            'nominal_pembayaran' => $request->nominal_pembayaran,
            'aspek_pembayaran' => $request->aspek_pembayaran,
            'metode_pembayaran' => $request->metode_pembayaran,
            'status_pembayaran' => $request->status_pembayaran,
        ]);


        return redirect()->route('home.pembayaran')->with('success','Pembayaran berhasil ditambahkan');

}
    public function edit($id_pembayaran){
        $list = Pembayaran::where('id_pembayaran',$id_pembayaran)->firstOrFail();
        return view('pembayaran.editPembayaran',[
            'list' => $list
        ]);
    }

    public function update(Request $request, $id_pembayaran){
        $request->validate([
            'tgl_pembayaran' => 'required|date',
            'termin_pembayaran' => 'required|in:Select the preferred payment terms,Satu,Dua',
            'nominal_pembayaran' => 'required|numeric',
            'aspek_pembayaran' => 'required|in:Choose the payment aspect you will pay,Kosan Tipe Kamar Suite, Kosan Tipe Kamar Medium, Kosan Tipe Kamar Reguler, Laundry, Kebersihan',
            'metode_pembayaran' => 'required|string',
            'status_pembayaran' => 'required|in:Select the status, Belum Lunas, Lunas, Dibatalkan',
        ], [
            'required' => 'Column :attribute must be filled in.',
            'date' => 'Column :attribute must be in date format.',
            'in' => 'Column :attribute must select one of the available options.',
            'numeric' => 'Column :attribute must be a numeric.',
            'string' => 'Column :attribute must be a text.'
        ]);

        $tanggalFormatBaru = Carbon::createFromFormat('Y-m-d', $request->tgl_pembayaran)->format('Y-m-d');
        $pembayaran = Pembayaran::where('id_pembayaran', $id_pembayaran)->update([
            'tgl_pembayaran' => $tanggalFormatBaru,
            'termin_pembayaran' => $request->termin_pembayaran,
            'nominal_pembayaran' => $request->nominal_pembayaran,
            'aspek_pembayaran' => $request->aspek_pembayaran,
            'metode_pembayaran' => $request->metode_pembayaran,
            'status_pembayaran' => $request->status_pembayaran,
        ]);
        return redirect('/pembayaran')->with('success','Pembayaran berhasil diubah');
}

    public function destroy($id_pembayaran){
        $pembayaran = Pembayaran::where('id_pembayaran',$id_pembayaran)->delete();
        return redirect('/pembayaran')->with('success','Pembayaran berhasil dihapus');;
    }

    public function detail($id_pembayaran){
        $getDetailPembayaran = Pembayaran::where('id_pembayaran',$id_pembayaran)->firstOrFail();
        return view('pembayaran.detailPembayaran',[
            'details' => $getDetailPembayaran
        ]);
    }

}
