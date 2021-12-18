@extends('layouts.admin')

@section('content')
    <!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Data Pelanggan</h1>
        <a href="{{ route('datapelanggans')}}" class="btn btn-primary shadow-sm">
            <i class="fas fa-plus fa-sm text-white-50"></i>Tambah Data Pelanggan</a>
        
    </div>

    <div class="row">
        <div class="card-body">
            <div class="table-responsive text-center">
                <table class="table-bordered" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nama Lengkap</th>
                            <th>Jenis Kelamin</th>
                            <th>Tempat Lahir</th>
                            <th>Tanggal Lahir</th>
                            <th>Nomor KTP</th>
                            <th>Telepon / WA</th>
                            <th>Nomor Passport</th>
                            <th>Alamat</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($items as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->namalengkap }}</td>
                                <td>{{ $item->jenis_kelamin }}</td>
                                <td>{{ $item->tempat_lahir }}</td>
                                <td>{{ $item->tgl_lahir }}</td>
                                <td>{{ $item->ktp }}</td>
                                <td>{{ $item->telp }}</td>
                                <td>{{ $item->no_passport }}</td>
                                <td>{{ $item->alamat }}</td>
                                
                                <td>
                                    
                                    <a href="{{ route('datapelanggans.edit', $item->id) }}" class="btn btn-info">
                                        <i class="fa fa-pencil-alt"></i>
                                    </a>
                                    <form action="{{ route('datapelanggans.destroy', $item->id) }}" method="POST"
                                        class="d-inline">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-danger">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="15" class="text-center">
                                    Data Kosong
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
    <a href="{{route('cetak-data')}}" class="btn btn-primary" target="_blank">CETAK PDF</a>
</div>
<!-- /.container-fluid -->
@endsection