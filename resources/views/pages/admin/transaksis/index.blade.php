@extends('layouts.admin')

@section('content')
    <!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Transaksi</h1>
        
    </div>

    <div class="row">
        <div class="card-body">
            <div class="table-responsive text-center">
                <table class="table-bordered" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Travel</th>
                            <th>User</th>
                            <th>Visa</th>
                            <th>Total</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($items as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->paket_travels->namapaket }}</td>
                                <td>{{ $item->user->name }}</td>
                                <td>Rp. {{ $item->tambah_visa }}</td>
                                <td>Rp. {{ $item->total_transaksi }}</td>
                                <td>{{ $item->sukses_transaksi }}</td>
                                
                                <td>
                                    <a href="{{ route('transaksis.show', $item->id) }}" class="btn btn-primary">
                                        <i class="fa fa-eye"></i>
                                    </a>
                                    <a href="{{ route('transaksis.edit', $item->id) }}" class="btn btn-info">
                                        <i class="fa fa-pencil-alt"></i>
                                    </a>
                                    <form action="{{ route('transaksis.destroy', $item->id) }}" method="POST"
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