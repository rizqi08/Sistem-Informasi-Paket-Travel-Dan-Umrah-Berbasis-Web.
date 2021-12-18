<!DOCTYPE html>
<html>
<head>
	<title>Laporan Data Pelanggan</title>
	<link rel="stylesheet"href="{{ url('frontend/libraries/bootstrapt/css/bootstrap.css') }}">
</head>
<body>
	<div class="container">
		<h1>Laporan Data Pelanggan</h1>
		<table class="table table-bordered">
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
            </tr>
            @foreach ($items as $item)
            <tr>
                <td>{{ $item->transaksi_details_id->id }}</td>
                <td>{{ $item->namalengkap }}</td>
                <td>{{ $item->jenis_kelamin }}</td>
                <td>{{ $item->tempat_lahir }}</td>
                <td>{{ $item->tgl_lahir }}</td>
                <td>{{ $item->ktp }}</td>
                <td>{{ $item->telp }}</td>
                <td>{{ $item->no_passport }}</td>
                <td>{{ $item->alamat }}</td>
            </tr>
            @endforeach
        </table>
	</div>
</body>
</html>