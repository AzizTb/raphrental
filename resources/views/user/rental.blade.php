@extends('user.layouts.master')

@section('main_content')

<br><br><br><br>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <form action="{{route('sewa.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="">Tanggal Sekarang</label>
                    <input type="text" name="tgl_sekarang" class="form-control" value="@php
                        echo date("d-m-y");
                    @endphp" readonly>
                    @error('mobil_no')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">Alamat Tujuan</label>
                    <textarea name="alamat_sewa" class="form-control" required></textarea>
                    @error('mobil_no')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">Tanggal Mulai Sewa</label>
                    <input type="date" name="tgl_mulai_sewa" class="form-control" required>
                    @error('mobil_no')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">Tanggal Selesai Sewa</label>
                    <input type="date" name="tgl_selesai_sewa" class="form-control" required>
                    @error('mobil_no')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">Mobil</label>
                    <select name="nama_mobil" class="form-control" required>
                        @foreach ($mobil as $car )
                            <option value="{{$car->nama_mobil}}">{{$car->nama_mobil}}</option>
                        @endforeach
                    </select>
                    @error('mobil_no')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">Driver</label>
                    <select name="nama_driver" class="form-control">
                        <option value="Tidak Memakai Driver">Pilih Driver</option>
                        @foreach ($driver as $pengemudi )
                            <option value="{{$pengemudi->nama_driver}}">{{$pengemudi->nama_driver}}</option>
                        @endforeach
                    </select>
                    @error('mobil_no')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <button type="reset" class="btn btn-outline-warning">Reset</button>
                    <button type="submit" class="btn btn-outline-primary">Simpan</button>
                </div>
           </form>
        </div>
    </div>
</div>

<br>
@endsection
