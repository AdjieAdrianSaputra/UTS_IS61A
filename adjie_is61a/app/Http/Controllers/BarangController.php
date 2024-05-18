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
        return view('barang.index');
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
        $cus = new Barang;
        $cus->nama_barang = $request->nama_barang;
        $cus->tarif = $request->tarif;
        $cus->save();

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