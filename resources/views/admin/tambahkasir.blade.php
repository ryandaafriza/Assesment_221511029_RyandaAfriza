<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Kasir Baru</title>
    <!-- Bootstrap CSS (CDN) -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #FAF3DD;
            color: #333;
            margin: 0;
            padding: 0;
        }
        .navbar-custom {
            background-color: #ECCCB2;
            border-bottom: 3px solid #C8C6A7;
        }
        .navbar-brand {
            color: #5D5C61;
        }
        .container {
            background-color: #FFFFFF;
            margin-top: 80px;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.05);
        }
        .form-label {
            color: #6D6875;
        }
        .form-control {
            background-color: #FFF0F5;
            border: 1px solid #DDBEA9;
            border-radius: 8px;
            padding: 10px 15px;
        }
        .btn-custom {
            background-color: #B5838D;
            color: white;
            border-radius: 8px;
            padding: 10px 20px;
            border: none;
        }
        .btn-custom:hover {
            background-color: #9D6973;
        }
        footer {
            text-align: center;
            padding: 20px;
            background-color: #ECCCB2;
            color: #5D5C61;
            margin-top: 40px;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-custom fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#"><i class="fas fa-utensils"></i> Restoran Pujasera</a>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h1 class="mb-4">Tambah Kasir Baru</h1>
                        <!-- Form -->
                        <form method="POST" action="{{ route('kasir.store') }}">
                            @csrf
                            <div class="mb-3">
                                <label for="KodeKasir" class="form-label">Kode Kasir:</label>
                                <input type="text" class="form-control" name="KodeKasir" id="KodeKasir" required>
                            </div>

                            <div class="mb-3">
                                <label for="Nama" class="form-label">Nama:</label>
                                <input type="text" class="form-control" name="Nama" id="Nama" required>
                            </div>

                            <div class="mb-3">
                                <label for="HP" class="form-label">HP:</label>
                                <input type="text" class="form-control" name="HP" id="HP" required>
                            </div>

                            <button type="submit" class="btn btn-custom">Tambah Kasir</button>
                        </form>
                        <!-- End Form -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        <p>&copy; 2023 Restoran Pujasera. All rights reserved.</p>
    </footer>

    <!-- Bootstrap JS (CDN) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.min.js"></script>
</body>
</html>
