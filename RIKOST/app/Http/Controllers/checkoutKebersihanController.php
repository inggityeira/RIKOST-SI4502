<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\layoutkebersihan;

class checkoutKebersihanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datas = layoutkebersihan::all();
        return view('kebersihan.index', compact('datas'), [
            'title' => 'Halaman Kebersihan',
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $datas = layoutkebersihan::where('id', $id)->first();

        if (!$datas) {
            return redirect()->back();
        }
        return view('kebersihan.pembayaran', compact('datas'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
