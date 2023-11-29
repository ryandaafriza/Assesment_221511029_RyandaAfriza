<!DOCTYPE html>
<html>
<head>
    <title>Detail Barang</title>
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
        .card {
            background-color: #b2d8d8; /* Warna latar belakang card */
        }
        .btn-warning {
            background-color: #86afaf; /* Warna tombol Edit */
            border-color: #86afaf;
        }
        .btn-warning:hover {
            background-color: #6b8c8c; /* Warna tombol Edit saat hover */
            border-color: #6b8c8c;
        }
        .btn-secondary {
            background-color: #b2d8d8; /* Warna tombol Kembali */
            border-color: #b2d8d8;
        }
        .btn-secondary:hover {
            background-color: #86afaf; /* Warna tombol Kembali saat hover */
            border-color: #86afaf;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h1>Detail Barang</h1>

        <div class="card mt-3">
            <div class="card-body">
                <h5 class="card-title">{{ $barang->NamaBarang }}</h5>
                <p class="card-text"><strong>Satuan:</strong> {{ $barang->Satuan }}</p>
                <p class="card-text"><strong>Harga Satuan:</strong> Rp {{ number_format($barang->HargaSatuan, 2, ',', '.') }}</p>
                <p class="card-text"><strong>Stok:</strong> {{ $barang->Stok }}</p>
                <a href="{{ route('barang.edit', $barang->KodeBarang) }}" class="btn btn-warning">Edit</a>
                <a href="{{ route('barang.index') }}" class="btn btn-secondary">Kembali ke Daftar Barang</a>
            </div>
        </div>
    </div>
</body>
</html>
