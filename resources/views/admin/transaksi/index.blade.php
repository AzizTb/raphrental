@extends('adminlte::page')
@section('header')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-12">
                <h1 class="m-0">Data Transaksi</h1>
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
                    Data Transaksi
                    <a href="{{route('transaksi.create')}}" class="btn btn-sm btn-outline-primary float-right">Tambah transaksi</a>
                </div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="table-responsive">
                        <table class="table">
                            <tr>
                                <th>Nomor</th>
                                <th>No Mobil</th>
                                <th>Tanggal Sewa</th>
                                <th>Tanggal Kembali</th>
                                <th>Lama Pakai</th>
                                <th>Total Biaya</th>
                                <th>ID Penyewa</th>
                                <th>Tanggal transaksi</th>
                            </tr>
                            @php $no=1; @endphp
                            @foreach($transaksi as $data)
                            <tr>
                                <td>{{$no++}}</td>
                                <td>{{$data->mobil_no}}</td>
                                <td>{{$data->tgl_sewa}}</td>
                                <td>{{$data->tgl_kembali}}</td>
                                <td>{{$data->lama_pakai}}</td>
                                <td>{{$data->total_biaya}}</td>
                                <td>{{$data->penyewa_id}}</td>
                                <td>{{$data->tgl_transaksi}}</td>
                                <td>
                                    <form action="{{route('transaksi.destroy',$data->id)}}" method="post">
                                        @method('delete')
                                        @csrf
                                        <a href="{{route('transaksi.edit',$data->id)}}" class="btn btn-outline-info">Edit</a>
                                        <a href="{{route('transaksi.show',$data->id)}}" class="btn btn-outline-warning">Show</a>
                                        <button type="submit" class="btn btn-outline-danger" onclick="return confirm('Apakah anda yakin menghapus ini?');">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
