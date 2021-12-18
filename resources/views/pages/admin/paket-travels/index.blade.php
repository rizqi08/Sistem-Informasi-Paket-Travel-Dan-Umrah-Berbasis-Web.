@extends('layouts.admin')

@section('content')
    <!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Paket Travel</h1>
        <a href="{{ route('paket-travels.create')}}" class="btn btn-primary shadow-sm">
            <i class="fas fa-plus fa-sm text-white-50"></i>Tambah Paket Travel
        </a>
    </div>

    <div class="row">
        <div class="card-body">
            <div class="table-responsive text-center">
                <table class="table-bordered" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Nama Paket</th>
                            <th>Type</th>
                            <th>Tanggal</th>
                            <th>Type</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($items as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->title }}</td>
                                <td>{{ $item->namapaket }}</td>
                                <td>{{ $item->type }}</td>
                                <td>{{ $item->tgl_berangkat }}</td>
                                <td>{{ $item->type }}</td>
                                <td>
                                    <a href="{{ route('paket-travels.edit', $item->id) }}" class="btn btn-info">
                                        <i class="fa fa-pencil-alt"></i>
                                    </a>
                                    <form action="{{ route('paket-travels.destroy', $item->id) }}" method="POST"
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
                                <td colspan="7" class="text-center">
                                    Data Kosong
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    

</div>
<!-- /.container-fluid -->
@endsection