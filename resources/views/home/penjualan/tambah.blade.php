@extends('layouts.master');
@section('title','penjualan');
@section('content')
 <div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3>halaman tamabah data penjualan</h3>
                            <a class= "btn btn-warning" href="/penjualan">kembali</a>
                        </div>
                            <div class="card-body"></div>
                    <form action="/penjualan/simpan" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="" class="form-label">id</label>
                           <input
                                  type="text"
                                   class="form-control"
                                   name="id"
                                   id =""
                                   aria-describedby="helpId"
                                   placeholder=""
                                   />
                                   @error('id')
                                   <div class="alert-danger mt-2">
                                    {{$message}}
                                   </div>
                                   @enderror
                                   <small id="helpId" class="form-text text-muted">help text</small>
                        </div>
                        @csrf
                        <div class="mb-3">
                            <label for="" class="form-label">tanggal_penjualan</label>
                           <input
                                  type="date"
                                   class="form-control"
                                   name="tanggal_penjualan"
                                   id =""
                                   aria-describedby="helpId"
                                   placeholder=""
                                   />
                                   @error('tanggal_penjualan')
                                   <div class="alert-danger mt-2">
                                    {{$message}}
                                   </div>
                                   @enderror
                                   <small id="helpId" class="form-text text-muted">help text</small>
                        </div>
                        @csrf
                        <div class="mb-3">
                            <label for="" class="form-label">total harga</label>
                           <input
                                  type="text"
                                   class="form-control"
                                   name="total_harga"
                                   id =""
                                   aria-describedby="helpId"
                                   placeholder=""
                                   />
                                   @error('total_harga')
                                   <div class="alert-danger mt-2">
                                    {{$message}}
                                   </div>
                                   @enderror
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

