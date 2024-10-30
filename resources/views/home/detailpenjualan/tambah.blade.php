@extends('layouts.master');
@section('title','pelanggan');
@section('content')
 <div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3>halaman tamabah data pelanggan</h3>
                            <a class= "btn btn-warning" href="/pelanggan">kembali</a>
                        </div>
                            <div class="card-body"></div>
                    <form action="/pelanggan/simpan" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="nama_pelanggan" class="form-label">nama pelanggan </label>
                           <input
                                  type="text"
                                   class="form-control"
                                   name="nama_pelanggan"
                                   id =""
                                   aria-describedby="helpId"
                                   placeholder=""
                                   />
                                   <small id="helpId" class="form-text text-muted">help text</small>
                        </div>
                        @csrf
                        <div class="mb-3">
                            <label for="alamat" class="form-label">alamat</label>
                           <input
                                  type="text"
                                   class="form-control"
                                   name="alamat"
                                   id =""
                                   aria-describedby="helpId"
                                   placeholder=""
                                   />
                                   <small id="helpId" class="form-text text-muted">help text</small>
                        </div>
                        @csrf
                        <div class="mb-3">
                            <label for="nomor_telepon" class="form-label">nomor telepon</label>
                           <input
                                  type="nummber"
                                   class="form-control"
                                   name="nomor_telepon"
                                   id =""
                                   aria-describedby="helpId"
                                   placeholder=""
                                   />
                                   <small id="helpId" class="form-text text-muted">help text</small>
                        </div>
                        <button class="btn btn-primary" type="submit">simpan</button>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
 </div>
@endsection
