<?php

namespace App\Http\Controllers;

use App\Models\Kamar;
use Illuminate\Http\RedirectResponse;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\View\View;
use Illuminate\Support\Facades\Storage;

class KamarController extends Controller
{
    protected $table = 'kamars';
    protected $primaryKey = 'id_kamar';

    public function index()
    {
        $data = Kamar::oldest()->get();
        return view('kamar.index', compact('data'));
    }

    public function create(): View
    {
        return view('kamar.tambahKamar');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'lantai_kamar' => 'required',
            'jenis_kamar' => 'required',
            'fasilitas_kamar' => 'required',
            'harga_kamar' => 'required',
            'foto_kamar' => 'required|image|mimes:jpeg,png,jpg,svg|max:500000',
        ]);

        if ($validator->fails()) {

            return redirect()->back()->withInput();
        }
        $file = $request->file('foto_kamar');

        if (!$file) {
            return redirect()->back()->withErrors(['foto_kamar' => 'Tidak ada file yang diunggah.']);
        }

        $eks = $file->getClientOriginalExtension();
        $path = public_path('storage/uploads/');
        $name = "Kamar-" . uniqid() . "." . $eks;

        try {
            $layout = new Kamar();
            $layout->lantai_kamar = $request->lantai_kamar;
            $layout->jenis_kamar = $request->jenis_kamar;
            $layout->fasilitas_kamar = $request->fasilitas_kamar;
            $layout->harga_kamar = $request->harga_kamar;
            $layout->foto_kamar = $name;
            $layout->status_kamar = 'Tersedia';
            if ($layout->save()) {
                $file->move($path, $name);
            }

            return redirect('/kamar');
        } catch (\Throwable $th) {
            return redirect()->back();
        }
    }

    public function edit(string $id): View
    {
        $data = Kamar::where('id_kamar', '=', $id)->first();
        $idkamar = $data->id_kamar;
        return view('kamar.editKamar', compact('data', 'idkamar'));
    }

    public function view(string $id): View
    {
        $data = Kamar::where('id_kamar', '=', $id)->first();
        $idkamar = $data->id_kamar;
        return view('kamar.identitasKamar', compact('data', 'idkamar'));
    }

    public function destroy($id_kamar): RedirectResponse
    {
        Kamar::where('id_kamar', $id_kamar)->delete();

        return redirect()->route('kamar');
    }


    public function update(Request $request, $id): RedirectResponse
    {
        $this->validate($request, [
            'lantai_kamar' => 'required',
            'jenis_kamar' => 'required',
            'fasilitas_kamar' => 'required',
            'harga_kamar' => 'required',
            'status_kamar' => 'required',
            'foto_kamar' => 'image',
        ]);

        if ($request->hasFile('foto_kamar')) {
            $file = $request->file('foto_kamar');

            if (!$file) {
                return redirect()->back()->withErrors(['foto_kamar' => 'Tidak ada file yang diunggah.']);
            }

            $eks = $file->getClientOriginalExtension();
            $path = public_path('storage/uploads/');
            $name = "Kamar-" . uniqid() . "." . $eks;

            Kamar::where('id_kamar', $id)
                ->update([
                    'lantai_kamar' => $request->lantai_kamar,
                    'jenis_kamar' => $request->jenis_kamar,
                    'fasilitas_kamar' => $request->fasilitas_kamar,
                    'harga_kamar' => $request->harga_kamar,
                    'status_kamar' => $request->status_kamar,
                    'foto_kamar' => $name,
                ]);
        } else {

            Kamar::where('id_kamar', $id)
                ->update([
                    'lantai_kamar' => $request->lantai_kamar,
                    'jenis_kamar' => $request->jenis_kamar,
                    'fasilitas_kamar' => $request->fasilitas_kamar,
                    'harga_kamar' => $request->harga_kamar,
                    'status_kamar' => $request->status_kamar,
                ]);
        }

        return redirect()->route('kamar')->with('success', 'Data kamar berhasil diperbarui.');
    }
}
