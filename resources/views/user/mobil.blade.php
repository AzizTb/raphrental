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
                                    <th>Nama Mobil</th>
                                    <th>Harga Sewa</th>
                                    <th>Kapasitas Penumpang</th>
                                    <th>Gambar</th>
                                    <th>Aksi</th>
                                </tr>
                                @php $no=1; @endphp
                                @foreach($mobil as $data)
                                <tr>
                                    <td>{{$no++}}</td>
                                    <td>{{$data->nama_mobil}}</td>
                                    <td>{{$data->harga_sewa}}</td>
                                    <td>{{$data->kapasitas_penumpang}}</td>
                                    <td><img src="{{$data->image()}}" alt="" style="width:160px; height:100px;" alt="Gambar"></td>
                                    <td><a href="{{route('mobiluser.show', $data->id)}}" class="btn btn-outline-warning">Lihat Detail</a></td>
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
