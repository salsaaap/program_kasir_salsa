@extends('layouts.master');
@section('title','produk');
@section('content')
 <div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3>halaman tamabah data produk</h3>
                            <a class= "btn btn-warning" href="/produk">kembali</a>
                        </div>
                            <div class="card-body"></div>
                    <form action="/produk/simpan" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="" class="form-label">nama produk </label>
                           <input
                                  type="text"
                                   class="form-control"
                                   name="nama_produk"
                                   id =""
                                   aria-describedby="helpId"
                                   placeholder=""
                                   />
                                   <small id="helpId" class="form-text text-muted">help text</small>
                        </div>
                        @csrf
                        <div class="mb-3">
                            <label for="" class="form-label">harga</label>
                           <input
                                  type="text"
                                   class="form-control"
                                   name="harga"
                                   id =""
                                   aria-describedby="helpId"
                                   placeholder=""
                                   />
                                   <small id="helpId" class="form-text text-muted">help text</small>
                        </div>
                        @csrf
                        <div class="mb-3">
                            <label for="" class="form-label">stok</label>
                           <input
                                  type="text"
                                   class="form-control"
                                   name="stok"
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

