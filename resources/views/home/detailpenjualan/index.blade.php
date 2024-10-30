@extends('layouts.master')
@section('title', 'pelanggan')
@section('content')


            <div class="row">
              <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <a class="btn btn-primary" href="/pelanggan/tambah">tambah</a>
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                            <th> id_pelanggan </th>
                            <th> nama_pelanggan </th>
                            <th> alamat </th>
                            <th> nomor_telepon </th>
                            <th> action </th>

                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                           @foreach ($pelanggan as $pelanggan)
                              <thead>
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$pelanggan->nama_pelanggan}}</td>
                                    <td>{{$pelanggan->alamat}}</td>
                                    <td>{{$pelanggan->nomor_telepon}}</td>
                                   <td><a class ="btn btn-warning"href="/pelanggan/{{$pelanggan->id}}/show">edit</a>
                                       <a class ="btn btn-danger"href="/pelanggan/{{$pelanggan->id}}/delete"
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

