@extends('adminlte::page')

@section('content_header')
<br>
@endsection

@section('header')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-12">
                <h1 class="m-0">Edit Data Mobil</h1>
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
                   <form method="POST" action="{{route('mobil.update',$mobil->id)}}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="">Nama Mobil</label>
                            <input type="text" name="nama_mobil" class="form-control" value="{{$mobil->nama_mobil}}" required>
                        </div>
                        <div class="form-group">
                            <label for="">Tahun Keluaran Mobil</label>
                            <input type="number" name="tahun_pembuatan" class="form-control" value="{{$mobil->tahun_pembuatan}}" required>
                        </div>
                        <div class="form-group">
                            <label for="">Plat Nomor Mobil</label>
                            <input type="text" name="no_mobil" class="form-control" value="{{$mobil->no_mobil}}" required>
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
                            <label for="">Harga Sewa Mobil</label>
                            <input type="number" name="harga_sewa" class="form-control" value="{{$mobil->harga_sewa}}" " required>
                        </div>
                        <div class="form-group">
                            <label for="">Kapasitas Penumpang</label>
                            <input type="number" name="kapasitas_penumpang" class="form-control" value="{{$mobil->kapasitas_penumpang}}" required>
                        </div>
                        <div class="form-group">
                            <label for="">Fasilitas Mobil</label>
                            <input type="text" name="fasilitas_mobil" class="form-control" value="{{ $mobil->fasilitas_mobil}} " required>
                        </div>
                        <div class="form-group">
                            <label for="">Gambar Terkait Mobil</label>
                            <br>
                            <img src="{{ $mobil->image() }}" height="75" style="padding:10px;" />
                            <input type="file" name="gambar" class="form-control" value="{{ $mobil->image()}} ">
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
