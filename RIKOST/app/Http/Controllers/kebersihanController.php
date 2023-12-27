<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\layoutkebersihan;
use Illuminate\Support\Facades\Validator;

class kebersihanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datas = layoutkebersihan::all();
        return view('kebersihan.admin.index', compact('datas'), [
            'title' => 'Admin Kebersihan',
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('kebersihan.admin.create', [
            'title' => 'Create Layout Kebersihan',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'judul' => 'required|string',
            'foto' => 'required|image|mimes:jpeg,png,jpg,svg|max:500000',
            'harga' => 'required',
            'deskripsi' => 'required'
        ]);

        if ($validator->fails()) {

            return redirect()->back()->withInput();
        }
        $file = $request->file('foto');

        if (!$file) {
            return redirect()->back()->withErrors(['foto' => 'Tidak ada file yang diunggah.']);
        }

        $eks = $file->getClientOriginalExtension();
        $path = public_path('storage/uploads/');
        $name = "PL-" . uniqid() . "." . $eks;

        try {
            $layout = new layoutkebersihan();
            $layout->judul = $request->judul;
            $layout->foto = $name;
            $layout->harga = $request->harga;
            $layout->deskripsi = $request->deskripsi;
            if ($layout->save()) {
                $file->move($path, $name);
            }

            return redirect('/kebersihan-admin');
        } catch (\Throwable $th) {
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = layoutkebersihan::findOrFail($id);
        return view('kebersihan.admin.edit', compact('data'), [
            'title' => 'Edit Layout Kebersihan',
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validator = Validator::make($request->all(), [
            'judul' => 'required|string',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,svg|max:500000',
            'harga' => 'required',
            'deskripsi' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withInput();
        }

        try {
            $layout = layoutkebersihan::findOrFail($id);
            $layout->judul = $request->judul;
            $layout->harga = $request->harga;
            $layout->deskripsi = $request->deskripsi;

            // Update foto jika ada file baru
            if ($request->hasFile('foto')) {
                $file = $request->file('foto');
                $eks = $file->getClientOriginalExtension();
                $path = public_path('storage/uploads/');
                $name = "PL-" . uniqid() . "." . $eks;
                $file->move($path, $name);
                $layout->foto = $name;
            }

            $layout->save();

            return redirect('/kebersihan-admin')->with('success', 'Data berhasil diperbarui');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Gagal memperbarui data');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $layout = layoutkebersihan::findOrFail($id);
            $layout->delete();

            return redirect('/kebersihan-admin')->with('success', 'Data berhasil dihapus');
        } catch (\Throwable $th) {
            return redirect('/kebersihan-admin')->with('error', 'Gagal menghapus data');
        }
    }
}
