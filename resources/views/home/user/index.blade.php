@extends('layouts.master')
@section('title', 'dashboard')
@section('content')

<div class="content-wrapper">
    <!-- judul halaman pake icon -->
            <div class="page-header">
              <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white me-2">
                  <i class="mdi mdi-home"></i>
                </span> halaman tambah data user

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
                    <a class="btn btn-primary" href="/user/tambah">tambah</a>
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                            <th> no </th>
                            <th> name </th>
                            <th> email </th>
                            <th> action </th>

                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                           @foreach ($user as $user)
                              <thead>
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->email}}</td>
                                   <td><a class ="btn btn-warning"href="/user/{{$user->id}}/show">edit</a>
                                       <a class ="btn btn-danger"href="/user/{{$user->id}}/delete"
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

