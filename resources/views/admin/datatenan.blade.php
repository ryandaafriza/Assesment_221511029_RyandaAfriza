<!DOCTYPE html>
<html>
<head>
    <title>Daftar kasir</title>
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
                <h1>Daftar kasir</h1>
            </div>
            <div class="col text-end">
                <a href="{{ route('kasir.create') }}" class="btn btn-primary">Tambah kasir</a>
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
                    <th>Kode Kasir</th>
                    <th>Nama</th>
                    <th>HP</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($kasir as $item)
                    <tr>
                        <td>{{ $item->KodeKasir }}</td>
                        <td>{{ $item->Nama }}</td>
                        <td>{{ $item->HP }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
