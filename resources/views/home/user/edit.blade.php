@extends('layouts.master')
@section('title', 'user')
@section('content')

<div class="content-wrapper">
<div class="card-header">
                            <h3>Halaman Edit Data User</h3>
                            <a class="btn btn-warning" href="/user">Kembali</a>

                        </div>
<div class="card-body">
    <form action="/user/{{ $user->id }}/update" method="post">
        @csrf
        <div class="mb-3">
            <label for="" class="form-label">Nama User</label>
            <input
                type="text"
                class="form-control"
                name="name"

                id=""
                 value="{{ $user->name }}"
                aria-describedby="helpId"
                placeholder=""
            />
            <small id="helpId" class="form-text text-muted">Help text</small>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Email</label>
            <input
                type="text"
                class="form-control"
                name="email"

                id=""
                value="{{ $user->email }}"
                aria-describedby="helpId"
                placeholder=""
            />
            <small id="helpId" class="form-text text-muted">Help text</small>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Password</label>
            <input
                type="text"
                class="form-control"
                name="password"
                id=""
                value="{{ $user->password }}"
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
