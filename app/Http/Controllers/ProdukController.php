<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Produk;

class ProdukController extends Controller
{

    public function index()
    {
        $produk = Produk::all();
        return view('home.Produk.index',compact('produk'));
    }


    public function create()
    {
       return view('home.produk.tambah');
    }

    public function store(Request $request)
    {
        Produk::create([
            'nama_produk'=>$request->nama_produk,
            'harga'=>$request->harga,
            'stok'=>$request->stok,
        ]);
        return redirect('/produk');
    }

    public function show(string $id)
    {
        $produk=Produk::find($id);
        return view('home.produk.edit' , compact('produk'));
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
        $produk =Produk::find($id);
        $produk->update([
            'nama_produk'=>$request->nama_produk,
            'harga'=>$request->harga,
            'stok'=>$request->stok,
        ]);
        return redirect('/produk');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $produk = Produk::find($id);
        $produk->delete();
        return redirect('/produk');
    }
}
