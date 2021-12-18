<!DOCTYPE html>
<html>
<head>
	<title>Laporan Pemesanan</title>
	<link rel="stylesheet"href="{{ url('frontend/libraries/bootstrapt/css/bootstrap.css') }}">
</head>
<body>
	<div class="container">
		<h1>Laporan Pemesanan</h1>
		<table class="table table-bordered">
            <tr>
                <th>ID</th>
                <th>Paket Travel</th>
                <th>Pembeli</th>
                <th>Tambah Visa</th>
                <th>Total Transaksi</th>
                <th>Status</th>
                <th>Pembelian</th>
            </tr>
            @foreach ($items as $item)
            <tr>
                <td>{{$item->id }}</td>
                <td>{{$item->paket_travels->namapaket}}</td>
                <td>{{$item->user->name}}</td>
                <td>Rp. {{$item->tambah_visa}}</td>
                <td>Rp. {{$item->total_transaksi}}</td>
                <td>{{$item->sukses_transaksi}}</td>
                <td>
                    <table class="table table-bordered">
                        <tr>
                            <th>ID</th>
                            <th>Nama</th>
                            <th>Kebangsaan</th>
                            <th>Visa</th>
                            <th>DOE Passport</th>
                        </tr>
                        @foreach ($item->details as $detail)
                            <tr>
                                <td>{{ $detail->id }}</td>
                                <td>{{ $detail->username }}</td>
                                <td>{{ $detail->kebangsaan }}</td>
                                <td>{{ $detail->is_visa ? '30 Days' : 'N/A' }}</td>
                                <td>{{ $detail->doe_passport }}</td>
                            </tr>
                        @endforeach
                    </table>
                </td>
            </tr>
            @endforeach
        </table>
	</div>
</body>
</html>