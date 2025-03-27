<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tambah Data Penjualan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <style>
        body {
            background-color: #f8f9fa;
        }
        .card {
            margin-top: 50px;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .btn-custom {
            transition: 0.3s;
        }
        .btn-custom:hover {
            transform: scale(1.05);
        }
    </style>
</head>
<body>
    <div class="container d-flex justify-content-center">
        <div class="card p-4 col-md-6">
            <h2 class="text-center mb-4"><i class="fas fa-chart-line"></i> Tambah Data Penjualan</h2>
            <form action="{{ route('sales_data.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="date" class="form-label">Tanggal:</label>
                    <input type="date" class="form-control" id="date" name="date" required>
                </div>
                <div class="mb-3">
                    <label for="sales" class="form-label">Penjualan:</label>
                    <input type="number" class="form-control" id="sales" name="sales" step="0.01" required>
                </div>
                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-primary btn-custom"><i class="fas fa-save"></i> Simpan</button>
                    <a href="{{ route('sales_data.index') }}" class="btn btn-secondary btn-custom"><i class="fas fa-times"></i> Batal</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>