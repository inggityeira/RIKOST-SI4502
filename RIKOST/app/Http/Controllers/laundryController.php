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

        $order = $laundry->save();
        if ($order){
            return back()->with('success', 'Data saved successfully!');
        }else{
            return back()->with('fail', 'Something wrong.');
        }

    }

    public function index(){
        $laundry = laundry::all();

        return view('laundry.listLaundry', compact('laundry'));
    }

    public function detail($id_laundry)
    {
    //    masukkan untuk mengakses view detail

    }

    public function update(Request $request, $id_laundry)
    {
        // untuk post hasil updatean
    }
    
}
