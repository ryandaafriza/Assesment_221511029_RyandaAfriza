<!DOCTYPE html>
<html>
<head>
    <title>Tambah Barang Baru</title>
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
        <h1 class="mb-4">Tambah Barang Baru</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('barang.store') }}" class="mt-3">
            @csrf
            <div class="form-group">
                <label for="NamaBarang">Nama Barang:</label>
                <input type="text" class="form-control" name="NamaBarang" id="NamaBarang" required>
            </div>

            <div class="form-group">
                <label for="Satuan">Satuan:</label>
                <input type="text" class="form-control" name="Satuan" id="Satuan" required>
            </div>

            <div class="form-group">
                <label for="HargaSatuan">Harga Satuan:</label>
                <input type="number" class="form-control" name="HargaSatuan" id="HargaSatuan" required>
            </div>

            <div class="form-group">
                <label for="Stok">Stok:</label>
                <input type="number" class="form-control" name="Stok" id="Stok" required>
            </div>

            <button type="submit" class="btn btn-primary">Tambah Barang</button>
        </form>
    </div>
</body>
</html>
