<!DOCTYPE html>
<html>
<head>
    <title>Daftar Barang</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f0e6e6; /* Warna latar belakang */
        }
        .container {
            background-color: #fff; /* Warna latar belakang konten */
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0px 0px 10px 0px #888;
        }
        .btn-primary {
            background-color: #b2d8d8; /* Warna tombol */
            border-color: #b2d8d8;
        }
        .btn-primary:hover {
            background-color: #86afaf; /* Warna tombol saat hover */
            border-color: #86afaf;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col">
                <h1>Daftar Barang</h1>
            </div>
            <div class="col text-end">
                <a href="{{ route('barang.create') }}" class="btn btn-primary">Tambah Barang</a>
            </div>
        </div>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <table class="table table-striped mt-3">
            <thead>
                <tr>
                    <th>Nama Barang</th>
                    <th>Satuan</th>
                    <th>Harga Satuan</th>
                    <th>Stok</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($barang as $item)
                    <tr>
                        <td>{{ $item->NamaBarang }}</td>
                        <td>{{ $item->Satuan }}</td>
                        <td>Rp {{ number_format($item->HargaSatuan, 2, ',', '.') }}</td>
                        <td>{{ $item->Stok }}</td>
                        <td>
                            <a href="{{ route('barang.edit', $item->KodeBarang) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('barang.destroy', $item->KodeBarang) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
