@extends('layouts.master')
@section('title', 'produk')
@section('content')

<div class="content-wrapper">
    <!-- judul halaman pake icon -->
            <div class="page-header">
              <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white me-2">
                  <i class="mdi mdi-home"></i>
                </span> halaman tambah data produk

              </h3>
              <nav aria-label="breadcrumb">
                <ul class="breadcrumb">
                  <li class="breadcrumb-item active" aria-current="page">
                    <span></span>Overview <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
                  </li>
                </ul>
              </nav>
            </div>
    <!-- end judul halaman pake icon -->


            <div class="row">
              <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <a class="btn btn-primary" href="/produk/tambah">tambah</a>
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                            <th> id_produk </th>
                            <th> nama_produk </th>
                            <th> harga </th>
                            <th> stok </th>
                            <th> action </th>

                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                           @foreach ($produk as $produk)
                              <thead>
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$produk->nama_produk}}</td>
                                    <td>{{$produk->harga}}</td>
                                    <td>{{$produk->stok}}</td>
                                   <td><a class ="btn btn-warning"href="/produk/{{$produk->id}}/show">edit</a>
                                       <a class ="btn btn-danger"href="/produk/{{$produk->id}}/delete"
                                        onclick="return confirm('yakin mau di hapus ?')">delete</a>
                                    </td>
                                </tr>
                              </thead>
                           @endforeach
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>


          </div>
@endsection

