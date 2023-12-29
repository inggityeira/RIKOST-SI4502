<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\laundry;
use App\Models\pegawai;
use App\Models\penyewa;

class laundryController extends Controller
{
    public function newlaundry(){
        $pegawai = pegawai::all();
        $penyewa = penyewa::all();
        return view('laundry.newlaundry', compact('pegawai', 'penyewa'));
    }

    public function store(Request $request){
        $laundry = new laundry();
        $laundry->jenis_laundry = $request->serviceLaundry;
        $laundry->id_penyewa = $request->nameLaundry;
        $laundry->berat_laundry = $request->weightLaundry;
        $laundry->tagihan_laundry = $request->laundrybill;
        $laundry->tgl_pemesanan = $request->odLaundry;
        $laundry->tgl_selesai = $request->pdLaundry;
        $laundry->status_laundry = $request->statusLaundry;
        $laundry->id_pegawai = $request->staffLaundry;

        $laundry->save();
        return redirect()->route('laundry.list')->with('success', 'Data saved successfully!');

    }

    public function index(){
        $laundry = laundry::all();

        return view('laundry.listLaundry', compact('laundry'));
    }

    public function informasi(){
        $laundry = laundry::all();
        $total = $laundry->count();
        $totalReceived = $laundry->where('status_laundry', 'Received')->count();
        $totalOngoing = $laundry->where('status_laundry', 'On-going')->count();
        $totalCompleted = $laundry->where('status_laundry', 'Completed')->count();

        $totalL1 = $laundry->where('jenis_laundry', 'L1 Pakaian Satuan')->count();
        $totalL2 = $laundry->where('jenis_laundry', 'L2 Pakaian Kiloan')->count();
        $totalL3 = $laundry->where('jenis_laundry', 'L3 Sepatu/Tas')->count();
        $totalL4 = $laundry->where('jenis_laundry', 'L4 Karpet')->count();
        $totalL5 = $laundry->where('jenis_laundry', 'L5 Setrika')->count();

        return view('laundry.informasiLaundry', compact('laundry', 'total', 'totalReceived', 'totalOngoing', 'totalCompleted', 'totalL1', 'totalL2', 'totalL3', 'totalL4', 'totalL5'));
    }

    public function service(){
        $laundry = laundry::all();
        // L1
        $L1Received = $laundry->where('jenis_laundry', 'L1 Pakaian Satuan')->where('status_laundry', 'Received')->count();
        $L1Ongoing = $laundry->where('jenis_laundry', 'L1 Pakaian Satuan')->where('status_laundry', 'On-going')->count();
        $L1Completed = $laundry->where('jenis_laundry', 'L1 Pakaian Satuan')->where('status_laundry', 'Completed')->count();

        // L2
        $L2Received = $laundry->where('jenis_laundry', 'L2 Pakaian Kiloan')->where('status_laundry', 'Received')->count();
        $L2Ongoing = $laundry->where('jenis_laundry', 'L2 Pakaian Kiloan')->where('status_laundry', 'On-going')->count();
        $L2Completed = $laundry->where('jenis_laundry', 'L2 Pakaian Kiloan')->where('status_laundry', 'Completed')->count();

        // L3
        $L3Received = $laundry->where('jenis_laundry', 'L3 Sepatu/Tas')->where('status_laundry', 'Received')->count();
        $L3Ongoing = $laundry->where('jenis_laundry', 'L3 Sepatu/Tas')->where('status_laundry', 'On-going')->count();
        $L3Completed = $laundry->where('jenis_laundry', 'L3 Sepatu/Tas')->where('status_laundry', 'Completed')->count();

        // L4
        $L4Received = $laundry->where('jenis_laundry', 'L4 Karpet')->where('status_laundry', 'Received')->count();
        $L4Ongoing = $laundry->where('jenis_laundry', 'L4 Karpet')->where('status_laundry', 'On-going')->count();
        $L4Completed = $laundry->where('jenis_laundry', 'L4 Karpet')->where('status_laundry', 'Completed')->count();

        // L5
        $L5Received = $laundry->where('jenis_laundry', 'L5 Setrika')->where('status_laundry', 'Received')->count();
        $L5Ongoing = $laundry->where('jenis_laundry', 'L5 Setrika')->where('status_laundry', 'On-going')->count();
        $L5Completed = $laundry->where('jenis_laundry', 'L5 Setrika')->where('status_laundry', 'Completed')->count();


        return view('laundry.serviceLaundry', compact('laundry', 'L1Received', 'L1Ongoing', 'L1Completed', 'L2Received', 'L2Ongoing', 'L2Completed', 'L3Received', 'L3Ongoing', 'L3Completed', 'L4Received', 'L4Ongoing', 'L4Completed', 'L5Received', 'L5Ongoing', 'L5Completed'));
    }

    public function detail($id_laundry)
    {
        $pegawai = pegawai::all();
        $penyewa = penyewa::all();
        $order = laundry::findOrFail($id_laundry);
        return view('laundry.detailLaundry', compact('order', 'pegawai', 'penyewa'));
    
    }

    public function update(Request $request, $id_laundry)
    {
        $order = laundry::findOrFail($id_laundry);
        $order->update([
            'jenis_laundry' => $request->serviceLaundry,
            'id_penyewa' => $request->nameLaundry,
            'berat_laundry' => $request->weightLaundry,
            'tagihan_laundry' => $request->laundrybill,
            'tgl_pemesanan' => $request->odLaundry,
            'tgl_selesai' => $request->pdLaundry,
            'status_laundry' => $request->statusLaundry,
            'id_pegawai' => $request->staffLaundry,
        ]);

        return redirect()->route('laundry.list')->with('success', 'Order updated successfully');
    }

    public function delete(Request $request, $id_laundry)
    {
        $order = Laundry::findOrFail($id_laundry);
        $order->delete();

        return redirect()->route('laundry.list')->with('success', 'Order deleted successfully');
    }
        
    
    
}
