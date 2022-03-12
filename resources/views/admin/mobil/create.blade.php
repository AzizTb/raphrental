@extends('adminlte::page')

@section('content_header')
<br>
@endsection

@section('header')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-12">
                <h1 class="m-0">Tambah Data Mobil</h1>
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
                   <form method="post" action="{{route('mobil.store')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="">Nama Mobil</label>
                            <input type="text" name="nama_mobil" class="form-control" value="{{ old('nama_mobil')}}" required>
                        </div>
                        <div class="form-group">
                            <label for="">Tahun Keluaran Mobil</label>
                            <input type="number" name="tahun_pembuatan" class="form-control" value="{{ old('tahun_pembuatan')}}" required>
                        </div>
                        <div class="form-group">
                            <label for="">Plat Nomor Mobil</label>
                            <input type="text" name="no_mobil" class="form-control" value="{{ old('no_mobil')}}" required>
                        </div>
                        <div class="form-group">
                            <label for="">Jenis Mobil</label>
                            <select name="jenis_mobil" class="form-control" required>
                                <option>- Pilih -</option>
                                <option value="Manual">Manual</option>
                                <option value="Matic">Matic</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Harga Sewa Mobil / Hari</label>
                            <input type="number" name="harga_sewa" class="form-control" value="{{ old('harga_sewa')}} " required>
                        </div>
                        <div class="form-group">
                            <label for="">Kapasitas Penumpang</label>
                            <input type="number" name="kapasitas_penumpang" class="form-control" value="{{ old('kapasitas_penumpang')}} " required>
                        </div>
                        <div class="form-group">
                            <label for="">Fasilitas Mobil</label>
                            <input type="text" name="fasilitas_mobil" class="form-control" value="{{ old('fasilitas_mobil')}} " required>
                        </div>
                        <div class="form-group">
                            <label for="">Gambar Terkait Mobil</label>
                            <input type="file" name="gambar" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <button type="reset" class="btn btn-outline-warning">Reset</button>
                            <button type="submit" class="btn btn-outline-primary">Buat</button>
                        </div>
                   </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
