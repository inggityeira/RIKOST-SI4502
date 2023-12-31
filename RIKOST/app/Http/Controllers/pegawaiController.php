<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pegawai;

class pegawaiController extends Controller
{

    public function store (Request $request)
    {
        pegawai::create ([
            'id_pegawai' => $request-> id_pegawai,
            'nama_pegawai' => $request-> nama_pegawai,
            'jabatan_pegawai' => $request-> jabatan_pegawai,
            'kontak_pegawai' => $request-> kontak_pegawai,
            'alamat_pegawai' => $request-> alamat_pegawai,
            'norek_pegawai' => $request-> norek_pegawai,
            'status_pegawai' => $request-> status_pegawai,
        ]);
        return redirect('/pegawai');
    }
    public function updatePegawai (Request $request, $id_pegawai)
    {
        $pegawai = pegawai::findorfail($id_pegawai);
        $pegawai-> update([
            'id_pegawai' => $request->id_pegawai,
            'nama_pegawai' => $request->nama_pegawai,
            'jabatan_pegawai' => $request->jabatan_pegawai,
            'kontak_pegawai' => $request->kontak_pegawai,
            'alamat_pegawai' => $request->alamat_pegawai,
            'norek_pegawai' => $request->norek_pegawai,
            'status_pegawai' => $request->status_pegawai,
        ]);
        return redirect('/pegawai');
        // return redirect ('/pegawai', compact('pegawai'))->with('pegawai', $pegawai);
    }
    public function input_Pegawai (){
        return view('pegawai/inputPegawai');
    }
    public function lihatTabel(){
        $pegawai = pegawai::all();
        return view('pegawai.listPegawai', compact('pegawai'));
    }

    public function editForm($id_pegawai)
    {
        $pegawai = pegawai::where('id_pegawai',$id_pegawai)->first();
        return view('pegawai.detailPegawai', compact('pegawai'));
        return redirect()->route('editPegawai');

    }

    public function delete($id_pegawai){
        $delete=pegawai::where('id_pegawai', $id_pegawai);
        $delete->delete();
        return back();
    }
}



