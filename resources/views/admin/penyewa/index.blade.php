@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<br>
@endsection

@section('header')
<div class="content-header">
    <div class="container-fluid">
        <div class="mb-2 row">
            <div class="col-sm-12">
                <h1 class="m-0">Penyewa</h1>
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
                <div class="card-header">
                    Data Penyewa
                    <a href="{{route('penyewa.create')}}" class="float-right btn btn-sm btn-outline-primary">Tambah Penyewa</a>
                </div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="table-responsive table-striped">
                        <table class="table">
                            <tr>
                                <th>No</th>
                                <th>Nama Lengkap</th>
                                <th>Foto KTP</th>
                                <th>Jenis Kelamin</th>
                                <th>Pekerjaan</th>
                                <th>Alamat Lengkap</th>
                                <th>Aksi</th>
                            </tr>
                            @php $no=1; @endphp
                            @foreach($penyewa as $data)
                                <tr>
                                    <td>{{$no++}}</td>
                                    <td>{{$data->nama_lengkap}}</td>
                                    <td><img src="{{$data->image()}}" alt="" style="width:90px; height:100px;" alt="Foto KTP"></td>
                                    <td>{{$data->jk}}</td>
                                    <td>{{$data->pekerjaan}}</td>
                                    <td>{{$data->alamat}}</td>
                                    <td>
                                        <form action="{{route('penyewa.destroy', $data->id)}}" method="post">
                                            @method('delete')
                                            @csrf
                                            <a href="{{route('penyewa.edit', $data->id)}}" class="mb-2 btn btn-outline-info">Edit</a><br>
                                            <a href="{{route('penyewa.show', $data->id)}}" class="mb-2 btn btn-outline-warning">Detail</a><br>
                                            <button type="submit" class="btn btn-outline-danger" onclick="return confirm('Apakah anda yakin menghapus')">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            {{ $penyewa->links() }}
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
