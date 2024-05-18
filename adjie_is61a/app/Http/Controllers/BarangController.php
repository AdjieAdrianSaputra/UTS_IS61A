<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\barang;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $nomor = 1;
        $brg = Barang::all(); //eloquent ORM
        return view('barang.index',compact('nomor','brg'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('barang.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $brg = new Barang;
        $brg->nama_barang = $request->nama_barang;
        $brg->tarif = $request->tarif;
        $brg->save();

        return redirect('/barang/');
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
        $brg = Barang::find($id);
        return view('barang.edit',compact('brg'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $brg = Barang::find($id);
        $brg->nama_barang = $request->nama_barang;
        $brg->tarif = $request->tarif;
        $brg->save();

        return redirect ('/barang/');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $brg = Barang::find($id);
        $brg->delete();

        return redirect('/barang/');
    }
}