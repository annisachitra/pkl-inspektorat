@extends('template.layout')
@section('css')
    <style>
        .warna{
            color: black;
        }
        /*  */
    </style>
@endsection
@section('content')
<div class="container">
    <div class="row garis">
        <h1>KONTAK KAMI</h1>
    <div class="card-body">
        <div class="container text-primary">
            <form action="#{{--{{ route('') }}--}}" class="form-group" method="POST" enctype="multipart/form-data">
                @csrf {{-- @method(PUT) --}}
                <div class="row " >
                    <div class="col-md-2">
                        <h3><label for="nama" >Nama</label></h3>
                    </div>
                    <div class="col-md-8">
                        <input type="text" class="form-control" name="nama" id="nama">
                    </div>
                </div>
                <br>
                <div class="row" >
                    <div class="col-md-2">
                        <h3><label for="judul">Judul</label></h3>
                    </div> <div class="col-md-8">
                        <input type="text" class="form-control" name="judul" id="judul">
                    </div>
                </div>
                <br>
                <div class="row" >
                    <div class="col-md-2">
                        <h3><label for="email">E-mail</label></h3>
                    </div> <div class="col-md-8">
                        <input type="text" class="form-control" name="email" id="email">
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-2">
                        <h3><label for="alamat">Alamat</label></h3>
                    </div>
                    <div class="col-md-8">
                        <textarea name="alamat" class="form-control" id="alamat" cols="20" rows="5"></textarea>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-2">
                        <h3><label for="komentar">Komentar</label></h3>
                    </div>
                    <div class="col-md-8">
                        <textarea name="komentar" class="form-control" id="komentar" cols="20" rows="5"></textarea>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-3 offset-md-5 offset-sm-4">
                        <button type="submit" class="btn btn-warning">Create</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
@endsection
