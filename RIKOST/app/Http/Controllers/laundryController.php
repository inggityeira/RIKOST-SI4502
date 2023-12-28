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
        $data = $request->all();
        
        laundry::create([
            'jenis_laundry' =>$data['serviceLaundry'],
            'id_penyewa' =>$data['nameLaundry'],
            'berat_laundry' =>$data['weightLaundry'],
            'tagihan_laundry' =>$data['laundrybill'],
            'tgl_pemesanan' =>$data['odLaundry'],
            'tgl_selesai' =>$data['pdLaundry'],
            'status_laundry' =>$data['statusLaundry'],
            'id_pegawai' =>$data['staffLaundry'],
        ]);
        return redirect(route('laundry.list'));
    }

    public function index(){
        $laundry = laundry::all();

        return view('laundry.listLaundry', compact('laundry'));
    }
    
}
