@extends('adminlte::page')

@section('content_header')
<br>
@endsection


@section('header')
<div class="content-header">
    <div class="container-fluid">
        <div class="mb-2 row">
            <div class="col-sm-12">
                <h1 class="m-0">Tambah Data Driver</h1>
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
                <div class="card-header">Data Driver</div>
                <div class="card-body">
                    <form action="{{route('driver.store')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="">Nama Driver :</label>
                        <input type="text" name="nama_driver" class="form-control" value="{{ old("nama_driver") }}" required>
                    </div>
                    <div class="form-group">
                        <label for="">Jenis kelamin</label>
                        <select name="jenis_kelamin" class="form-control" required>
                            <option>- Pilih -</option>
                            <option value="Laki-laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Alamat :</label>
                        <input type="text" name="alamat_driver" class="form-control" value="{{ old("alamat_driver") }}" required>
                    </div>
                    <div class="form-group">
                        <label for="">Nomor Telpon :</label>
                        <input type="number" name="no_telpon" class="form-control" value="{{ old("no_telpon") }}" placeholder="Misal 098999999" required>
                    </div>
                    <div class="form-group">
                        <button type="reset" class="btn btn-outline-warning">Reset</button>
                        <button type="submit" class="btn btn-outline-primary">Simpan</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
