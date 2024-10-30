@extends('layouts.master')
@section('title', 'pelanggan')
@section('content')

<div class="content-wrapper">
<div class="card-header">
                            <h3>Halaman Edit Data pelanggan</h3>
                            <a class="btn btn-warning" href="/pelanggan">Kembali</a>

                        </div>
<div class="card-body">
    <form action="/pelanggan/{{ $pelanggan->id }}/update" method="post">
        @csrf
        <div class="mb-3">
            <label for="nama_pelanggan" class="form-label">nama pelanggan</label>
            <input
                type="text"
                class="form-control"
                name="nama_pelanggan"

                id=""
                 value="{{ $pelanggan->nama_pelanggan }}"
                aria-describedby="helpId"
                placeholder=""
            />
            <small id="helpId" class="form-text text-muted">Help text</small>
        </div>
        <div class="mb-3">
            <label for="alamat" class="form-label">alamat</label>
            <input
                type="text"
                class="form-control"
                name="alamat"

                id=""
                value="{{ $pelanggan->alamat}}"
                aria-describedby="helpId"
                placeholder=""
            />
            <small id="helpId" class="form-text text-muted">Help text</small>
        </div>
        <div class="mb-3">
            <label for="nomor_telepon" class="form-label">nomor telepon</label>
            <input
                type="number"
                class="form-control"
                name="nomor_telepon"
                id=""
                value="{{ $pelanggan->nomor_telepon }}"
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
