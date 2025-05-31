@extends('layouts.main')
@section('content')
<div class="container mt-4">
    <div class="text-center">
        <h3>Register page</h3>
    </div>
    <form action
        <form action="">
        <div class="form-group mt-3">
            <label for="">Nomor Telepon</label>
            <input type="text" name="Nomor Telepon" id="Nomor Telepon"
                placeholder="Nomor Telepon" class="form-control">
        </div>
        <div class="form-group mt-3">
            <label for="">Nama</label>
            <input type="text" name="Nama" id="Nama"
                placeholder="Nama" class="form-control">
        </div>
        <div class="form-group mt-3">
            <label for="">Alamat</label>
            <input type="text" name="alamat" id="alamat"
                placeholder="alamat" class="form-control">
        </div>
        <div class="form-group mt-3">
            <label for="">Foto (Option)</label>
            <input type="text" name="foto" id="foto"
                placeholder="foto" class="form-control">
        </div>
        <div class="form-group mt-3">
            <label for="">Jenis Kelamin (Option)</label>
            <select type="text" name="Jenis Kelamin" id="Jenis Kelamin"
                placeholder="Jenis Kelamin" class="form-control">
                <Option
                    </div>
                    <div class="form-group mt-3">
                        <label for="">Password (Option)</label>
                        <input type="password" name="password" id="password"
                            placeholder="Password" class="form-control">
                    </div>
                    <a href="{{route('register)}}" class="mt-4 btn-primary">
                        <a href="{{route('home')}}" class="mt-4 btn btn-primary">
                            Login
                        </a>
    </form>
</div>
@endsection