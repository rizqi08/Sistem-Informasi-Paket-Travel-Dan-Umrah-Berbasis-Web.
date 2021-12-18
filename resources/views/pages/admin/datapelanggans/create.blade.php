@extends('layouts.admin')

@section('content')
    <!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tambah Data Pelanggan</h1>
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
            <form action="{{ route('datapelanggans') }}" method="POST" >
                @csrf
                <div class="form-group">
                    <label for="namalengkap" class="sr-only">Nama Lengkap</label>
                    <input type="text" name="namalengkap" class="form-control mb-2 mr-sm-2" 
                  			id="namalengkap" required placeholder="Nama Lengkap"/>
                </div>
                <div class="form-group">
                    <label for="jenis_kelamin">Jenis Kelamin</label>
                    <select name="jenis_kelamin" required class="form-control" id="">
                        <option value="laki-laki">Laki-laki</option>
                        <option value="perempuan">Perempuan</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="tempat_lahir">Tempat Lahir</label>
                    <input type="text" class="form-control" name="tempat_lahir" placeholder="Tempat Lahir"
                    value="{{ old('tempat_lahir')}}">
                </div>
                <div class="form-group">
                    <label for="tgl_lahir">Tanggal Lahir</label>
                    <input type="date" class="form-control" name="tgl_lahir" placeholder="Tanggal Lahir"
                    value="{{ old('tgl_lahir')}}">
                </div>
                <div class="form-group">
                    <label for="ktp">Nomor KTP</label>
                    <input type="number" class="form-control" name="ktp" placeholder="Nomor KTP"
                    value="{{ old('ktp')}}">
                </div>
                <div class="form-group">
                    <label for="telp">Telepon / WA</label>
                    <input type="number" class="form-control" name="telp" placeholder="Telepon / WA"
                    value="{{ old('telp')}}">
                </div>
                <div class="form-group">
                    <label for="no_passport">Nomor Passport</label>
                    <input type="number" class="form-control" name="no_passport" placeholder="Nomor Passport"
                    value="{{ old('no_passport')}}">
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <textarea name="alamat" rows="5" class="d-block w-100 form-control">
                    {{ old('alamat')}} </textarea>
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