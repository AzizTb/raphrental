@extends('user.layouts.master')

@section('main_content')

<br><br><br><br>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <form method="POST" action="">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nama Lengkap</label>
                    <input type="text" name="nama_penyewa" class="form-control @error('nama_penyewa') is-invalid @enderror " id="exampleInputEmail1">
                    @error('nama_penyewa')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Jenis Kelamin</label>
                    <input type="text" name="jk_penyewa" class="form-control @error('jk_penyewa') is-invalid @enderror " id="exampleInputEmail1">
                    @error('jk_penyewa')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Alamat</label>
                    <input type="text" name="alamat_penyewa" class="form-control @error('alamat_penyewa') is-invalid @enderror " id="exampleInputEmail1">
                    @error('alamat_penyewa')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Foto KTP</label>
                    <input type="text" name="ktp_penyewa" class="form-control @error('ktp_penyewa') is-invalid @enderror " id="exampleInputEmail1">
                    @error('ktp_penyewa')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Foto Diri</label>
                    <input type="text" name="foto_penyewa" class="form-control @error('foto_penyewa') is-invalid @enderror " id="exampleInputEmail1">
                    @error('foto_penyewa')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <button type="reset" class="btn btn-outline-warning">Reset</button>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>

<br>
@endsection
