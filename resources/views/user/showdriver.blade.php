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
                                Detail Driver
                            </b>
                        </center>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="">Nama Driver </label>
                            <label class="form-control"> {{$driver->nama_driver}} </label>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="">Jenis Kelamin</label>
                            <label class="form-control"> {{$driver->jenis_kelamin}} </label>
                        </div>
                        <br>
                        <br>
                        <div class="form-group">
                            <a href="{{route('driveruser.index')}}" class="btn btn-block btn-outline-primary">Kembali</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br><br>
@endsection
