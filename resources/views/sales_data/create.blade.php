<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data Penjualan</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Tambah Data Penjualan</h1>

        <form action="{{ route('sales_data.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="date">Tanggal:</label>
                <input type="date" class="form-control" id="date" name="date" required>
            </div>
            <div class="form-group">
                <label for="sales">Penjualan:</label>
                <input type="number" class="form-control" id="sales" name="sales" step="0.01" required>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="{{ route('sales_data.index') }}" class="btn btn-secondary">Batal</a>
        </form>
    </div>
</body>
</html>