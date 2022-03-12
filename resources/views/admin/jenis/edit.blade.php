@extends('adminlte::page')

@section('content_header')
<br>
@endsection

@section('header')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-12">
                <h1 class="m-0">Edit Jenis Mobil</h1>
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
                <div class="card-header">Edit Jenis Mobil</div>
                <div class="card-body">
                    <form method="post" action="{{route('jenismobil.update', ['mobil_id' => $jenismobil->jenismobil_id ])}}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Jenis Mobil</label>
                                    <input type="text" class="form-control" required name="nama_jenis" value="{{ old($jenismobil->nama_jenis) }}" >
                                </div>
                            </div>
                        </div>
                        <input type="submit">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
