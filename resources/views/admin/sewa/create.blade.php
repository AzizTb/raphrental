@extends('adminlte::page')
@section('header')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-12">
                <h1 class="m-0">Tambah Data Sewa</h1>
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
                <div class="card-header">Data Sewa</div>
                <div class="card-body">
                   <form action="{{route('sewa.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="">Tanggal Sekarang</label>
                            <input type="text" name="tgl_sekarang" class="form-control" value="@php
                                echo date("d-m-y");
                            @endphp" readonly>
                        </div>
                        <div class="form-group">
                            <label for="">Nama Penyewa</label>
                            <input type="text" name="nama_lengkap" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="">Alamat Tujuan</label>
                            <textarea name="alamat_sewa" class="form-control" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="">Tanggal Mulai Sewa</label>
                            <input type="date" name="tgl_mulai_sewa" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="">Tanggal Selesai Sewa</label>
                            <input type="date" name="tgl_selesai_sewa" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="">Mobil</label>
                            <select name="nama_mobil" class="form-control" required>
                                @foreach ($mobil as $car )
                                    <option value="{{$car->nama_mobil}}">{{$car->nama_mobil}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Driver</label>
                            <select name="nama_driver" class="form-control">
                                <option value="Tidak Memakai Driver">Pilih Driver</option>
                                @foreach ($driver as $pengemudi )
                                    <option value="{{$pengemudi->nama_driver}}">{{$pengemudi->nama_driver}}</option>
                                @endforeach
                            </select>
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
