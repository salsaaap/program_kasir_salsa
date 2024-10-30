@extends('layouts.master')
@section('title', 'produk')
@section('content')

<div class="content-wrapper">
<div class="card-header">
                            <h3>Halaman Edit Data produk</h3>
                            <a class="btn btn-warning" href="/produk">Kembali</a>

                        </div>
<div class="card-body">
    <form action="/produk/{{ $produk->id }}/update" method="post">
        @csrf
        <div class="mb-3">
            <label for="" class="form-label">nama produk</label>
            <input
                type="text"
                class="form-control"
                name="nama_produk"

                id=""
                 value="{{ $produk->nama_produk }}"
                aria-describedby="helpId"
                placeholder=""
            />
            <small id="helpId" class="form-text text-muted">Help text</small>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">harga</label>
            <input
                type="integer"
                class="form-control"
                name="harga"

                id=""
                value="{{ $produk->harga}}"
                aria-describedby="helpId"
                placeholder=""
            />
            <small id="helpId" class="form-text text-muted">Help text</small>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">stok</label>
            <input
                type="integer"
                class="form-control"
                name="stok"
                id=""
                value="{{ $produk->password }}"
                id=""
                aria-describedby="helpId"
                placeholder=""
            />
            <small id="helpId" class="form-text text-muted">Help text</small>
        </div>
        <button class="btn btn-primary" type="submit">Update</button>
</form>

</div>
</div>
@endsection
