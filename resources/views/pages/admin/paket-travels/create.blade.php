@extends('layouts.admin')

@section('content')
    <!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tambah Paket Travel</h1>
    </div>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error}}</li>
            @endforeach
        </ul>
    </div>
    @endif
    
    <div class="card shadow">
        <div class="card-body">
            <form action="{{ route ('paket-travels.store')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" name="title" placeholder="Title"
                    value="{{ old('title')}}">
                </div>
                <div class="form-group">
                    <label for="namapaket">Nama Paket</label>
                    <input type="text" class="form-control" name="namapaket" placeholder="Nama Paket"
                    value="{{ old('namapaket')}}">
                </div>
                <div class="form-group">
                    <label for="deskripsi">Deskripsi</label>
                    <textarea name="deskripsi" rows="10" class="d-block w-100 form-control">
                    {{ old('namapaket')}}</textarea>
                </div>
                <div class="form-group">
                    <label for="hotel">Hotel</label>
                    <input type="text" class="form-control" name="hotel" placeholder="Hotel"
                    value="{{ old('hotel')}}">
                </div>
                <div class="form-group">
                    <label for="maskapai">Maskapai</label>
                    <input type="text" class="form-control" name="maskapai" placeholder="Maskapai"
                    value="{{ old('maskapai')}}">
                </div>
                <div class="form-group">
                    <label for="jenispaket">Jenis Paket</label>
                    <input type="text" class="form-control" name="jenispaket" placeholder="Jenis Paket"
                    value="{{ old('jenispaket')}}">
                </div>
                <div class="form-group">
                    <label for="tgl_berangkat">Tanggal berangkat</label>
                    <input type="date" class="form-control" name="tgl_berangkat" placeholder="Tanggal berangkat"
                    value="{{ old('tgl_berangkat')}}">
                </div>
                <div class="form-group">
                    <label for="programhari">Program hari</label>
                    <input type="text" class="form-control" name="programhari" placeholder="Program hari"
                    value="{{ old('programhari')}}">
                </div>
                <div class="form-group">
                    <label for="bandara">Bandara</label>
                    <input type="text" class="form-control" name="bandara" placeholder="Bandara"
                    value="{{ old('bandara')}}">
                </div>
                <div class="form-group">
                    <label for="kamar">Kamar</label>
                    <input type="text" class="form-control" name="kamar" placeholder="Kamar"
                    value="{{ old('kamar')}}">
                </div>
                <div class="form-group">
                    <label for="type">Type</label>
                    <input type="text" class="form-control" name="type" placeholder="Type"
                    value="{{ old('type')}}">
                </div>
                <div class="form-group">
                    <label for="harga">Harga</label>
                    <input type="number" class="form-control" name="harga" placeholder="Harga"
                    value="{{ old('harga')}}">
                </div>
                <button type="submit" class="btn btn-primary btn-block">
                    Simpan
                </button>
            </form>
        </div>
    </div>

</div>
<!-- /.container-fluid -->
@endsection