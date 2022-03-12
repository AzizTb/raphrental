@extends('adminlte::page')

@section('content_header')
<br>
@endsection

@section('header')
<div class="content-header">
    <div class="container-fluid">
        <div class="mb-2 row">
            <div class="col-sm-12">
                <h1 class="m-0">Edit Data Driver</h1>
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
                <div class="card-header"> Data Driver</div>
                <div class="card-body">
                    <form method="POST" action="{{route('driver.update', $driver->id)}}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="">Nama Driver</label>
                            <input type="text" name="nama_driver" class="form-control" value="{{ $driver->nama_driver }}">
                        </div>
                        <div class="form-group">
                            <label for="">Jenis Kelamin</label>
                            <input type="text" name="jenis_kelamin" class="form-control" value="{{ $driver->jenis_kelamin }}">
                        </div>
                        <div class="form-group">
                            <label for="">Alamat</label>
                            <input type="text" name="alamat_driver" class="form-control" value="{{ $driver->alamat_driver }}">
                        </div>
                        <div class="form-group">
                            <label for="">Nomor Telpon</label>
                            <input type="number" name="no_telpon" class="form-control" value="{{ $driver->no_telpon }}">
                        </div>
                        <div class="form-group">
                            <button type="reset" class="btn btn-outline-warning">Reset</button>
                            <button type="submit" class="btn btn-outline-primary">Simpan</button>
                            <a href="{{ route("driver.index") }}" class="btn btn-outline-info">Kembali</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


