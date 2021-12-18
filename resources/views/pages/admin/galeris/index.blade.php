@extends('layouts.admin')

@section('content')
    <!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Galeri</h1>
        <a href="{{ route('galeris.create')}}" class="btn btn-primary shadow-sm">
            <i class="fas fa-plus fa-sm text-white-50"></i>Tambah Galeri
        </a>
    </div>

    <div class="row">
        <div class="card-body">
            <div class="table-responsive text-center">
                <table class="table-bordered" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Travel</th>
                            <th>Gambar</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($items as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->paket_travels->namapaket }}</td>
                                <td>
                                    <img src="{{ Storage::url($item->image)}}" alt="" style="width: 150px"
                                    class="img-thumbnail">
                                </td>
                                <td>
                                    <a href="{{ route('galeris.edit', $item->id) }}" class="btn btn-info">
                                        <i class="fa fa-pencil-alt"></i>
                                    </a>
                                    <form action="{{ route('galeris.destroy', $item->id) }}" method="POST"
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