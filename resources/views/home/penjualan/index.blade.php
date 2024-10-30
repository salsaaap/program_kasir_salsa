@extends('layouts.master')
@section('title', 'penjualan')
@section('content')

<div class="content-wrapper">
    <!-- judul halaman pake icon -->
            <div class="page-header">
              <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white me-2">
                  <i class="mdi mdi-home"></i>
                </span> halaman tambah data penjualan

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
                    <a class="btn btn-primary" href="/penjualan/tambah">tambah</a>
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                            <th> No </th>
                            <th> Id </th>
                            <th> tanggal_penjualan </th>
                            <th> total_harga </th>
                            <th> action </th>

                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                           @foreach ($penjualan as $penjualan)
                              <thead>
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$penjualan->id}}</td>
                                    <td>{{$penjualan->tanggal_penjualan}}</td>
                                    <td> Rp. {{number_format($penjualan->total_harga)}}</td>
                                   <td>
                                       <a class ="btn btn-warning"href="/penjualan/{{$penjualan->id}}/show">detail</a>
                                       <a  class ="btn btn-danger"href="/penjualan/{{$penjualan->id}}/delete"
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

