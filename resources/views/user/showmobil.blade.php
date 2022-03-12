@extends('user.layouts.master')

@section('main_content')
    <br><br><br><br>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <center>
                            <b>
                                Detail Mobil
                            </b>
                        </center>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="">Nama Mobil </label>
                            <label class="form-control"> {{$mobil->nama_mobil}} </label>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="">Jenis Transmisi Mobil</label>
                            <label class="form-control">
                                {{$mobil->jenis_mobil}}
                            </label>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="">Harga Sewa Mobil</label>
                            <label class="form-control"> {{$mobil->harga_sewa}} </label>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="">Kapasitas Penumpang</label>
                            <label class="form-control"> {{$mobil->kapasitas_penumpang}} </label>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="">Fasilitas Mobil</label>
                            <label class="form-control"> {{$mobil->fasilitas_mobil}} </label>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="">Gambar Mobil</label>
                            <br>
                            <img style="width:550px; height:300px;" src="{{ $mobil->image() }}">
                        </div>
                        <br>
                        <br>
                        <div class="form-group">
                            <a href="{{route('mobiluser.index')}}" class="btn btn-block btn-outline-primary">Kembali</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br><br>
@endsection
