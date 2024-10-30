<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\DetailPenjualan;

class PenjualanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $penjualan = DetailPenjualan::all();
        return view('home.detailpenjualan.index',compact('detailpenjualan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('home.detailpenjualan.tambah');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        DetailPenjualan::create([
            'id_penjualan'=>$request->id_penjualan,
            'id_produk'=>$request->id_produk,
            'jumlah_produk'=>$request->jumlah_produk,
            'subtotal'=>$request->subtotal,
        ]);
        return redirect('/detailpenjualan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $detailpenjualan =DetailPenjualan::find($id);
        return view('home.detailpenjualan.edit' , compact('detailpenjualan'));
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
        $detailpenjualan =DetailPenjualan::find($id);
        $detailpenjualan->update([
            'id_penjualan'=>$request->id_penjualan,
            'id_produk'=>$request->id_produk,
            'jumlah_produk'=>$request->jumlah_produk,
            'subtotal'=>$request->subtotal,
        ]);
        return redirect('/detailpenjualan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $detailpenjualan = DetailPenjualan::find($id);
        $detailpenjualan->delete();
        return redirect('/detailpenjualan');
    }
}
