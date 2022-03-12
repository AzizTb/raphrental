@extends('adminlte::page')

@section('content_header')
<br>
@endsection

@section('header')
<div class="content-header">
    <div class="container-fluid">
        <div class="mb-2 row">
            <div class="col-sm-12">
                <h1 class="m-0">Tambah Data Penyewa</h1>
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
                <div class="card-header">Data Penyewa</div>
                <div class="card-body">
                    <form method="post" action="{{route('penyewa.store')}}" enctype="multipart/form-data" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="">Nama Lengkap</label>
                        <input type="text" name="nama_lengkap" class="form-control" value="{{ old("nama_lengkap") }}">
                    </div>
                    <div class="form-group">
                        <label for="">Foto KTP</label>
                        <input type="file" name="foto" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="">Jenis kelamin</label>
                        <select name="jk" class="form-control" required>
                            <option>- Pilih -</option>
                            <option value="Laki-laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Pekerjaan</label>
                        <select name="pekerjaan" class="form-control" required>
                            <option>- Pilih -</option>
                            <option value="Guru">Guru</option>
                            <option value="Wirausaha">Wirausaha</option>
                            <option value="Wiraswasta">Wiraswasta</option>
                            <option value="Ibu Rumah Tangga">IRT</option>
                            <option value="Freelance">Freelance</option>
                            <option value="Tidak Bekerja">Tidak Bekerja</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Alamat Lengkap</label>
                        <input type="text" name="alamat" class="form-control" value="{{ old("alamat") }}">
                    </div>
                    <br>
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
