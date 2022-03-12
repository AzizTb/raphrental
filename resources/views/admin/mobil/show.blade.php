@extends('adminlte::page')

@section('content_header')
<br>
@endsection

@section('header')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-12">
                <h1 class="m-0">Show Data Mobil</h1>
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
                <div class="card-header">Data Mobil</div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="">Nama Mobil</label>
                        <input type="text" name="nama_mobil" class="form-control" value="{{$mobil->nama_mobil}}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="">Tahun Keluaran Mobil</label>
                        <input type="number" name="tahun_pembuatan" class="form-control" value="{{$mobil->tahun_pembuatan}}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="">Plat Nomor Mobil</label>
                        <input type="text" name="no_mobil" class="form-control" value="{{$mobil->no_mobil}}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="">Jenis Mobil</label>
                        <select name="jenis_mobil" class="form-control" readonly>
                            <option value="{{$mobil->jenis_mobil}}">{{$mobil->jenis_mobil}}</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Harga Sewa Mobil</label>
                        <input type="number" name="harga_sewa" class="form-control" value="{{$mobil->harga_sewa}}" " readonly>
                    </div>
                    <div class="form-group">
                        <label for="">Kapasitas Penumpang</label>
                        <input type="number" name="kapasitas_penumpang" class="form-control" value="{{$mobil->kapasitas_penumpang}}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="">Fasilitas Mobil</label>
                        <input type="text" name="kapasitas_penumpang" class="form-control" value="{{$mobil->fasilitas_mobil}}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="">Gambar Mobil</label>
                        <br>
                        <img src="{{ $mobil->image() }}">
                    </div>
                    <div class="form-group">
                        <a href="{{url('/admin/mobil')}}" class="btn btn-block btn-outline-primary">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
