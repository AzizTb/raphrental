@extends('adminlte::page')

@section('content_header')
<br>
@endsection

@section('header')
<div class="content-header">
    <div class="container-fluid">
        <div class="mb-2 row">
            <div class="col-sm-12">
                <h1 class="m-0">Edit Data Penyewa</h1>
            </div>
        </div>
    </div>
</div>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"> Data Penyewa</div>
                <div class="card-body">
                    <form action="{{route('penyewa.update', $penyewa->id)}}" method="post">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <label for="">Nama Penyewa</label>
                            <input type="text" name="nama_lengkap" class="form-control" value="{{ $penyewa->nama_lengkap }}">
                        </div>
                        <div class="form-group">
                            <label for="">Foto KTP</label>
                            <input type="file" name="ktp" class="form-control" value="{{ $penyewa->ktp }} ">
                        </div>
                        <div class="form-group">
                            <label for="">Jenis Kelamin</label>
                            <input type="text" name="jk" class="form-control" value="{{ $penyewa->jk }}">
                        </div>
                        <div class="form-group">
                            <label for="">Pekerjaan</label>
                            <input type="text" name="pekerjaan" class="form-control" value="{{ $penyewa->pekerjaan }}">
                        </div>
                        <div class="form-group">
                            <label for="">Alamat</label>
                            <input type="text" name="alamat" class="form-control" value="{{ $penyewa->alamat}}">
                        </div>
                        <div class="form-group">
                            <button type="reset" class="btn btn-outline-warning">Reset</button>
                            <button type="submit" class="btn btn-outline-primary">Simpan</button>
                            <a href="{{ route("penyewa.index") }}" class="btn btn-outline-info">Kembali</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


