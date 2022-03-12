@extends('user.layouts.master')

@section('main_content')
<br>
<br>
<section id="about" class="about">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Mobil Yang Kami Sediakan
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <tr>
                                    <th>No</th>
                                    <th>Nama Driver</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Aksi</th>
                                </tr>
                                @php $no=1; @endphp
                                @foreach($driver as $data)
                                <tr>
                                    <td>{{$no++}}</td>
                                    <td>{{$data->nama_driver}}</td>
                                    <td>{{$data->jenis_kelamin}}</td>
                                    <td><a href="{{route('driveruser.show', $data->id)}}" class="btn btn-outline-warning">Lihat Detail</a></td>
                                </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
