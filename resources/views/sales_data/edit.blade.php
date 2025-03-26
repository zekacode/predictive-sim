<!DOCTYPE html>
<html>
<head>
    <title>Edit Data Penjualan</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Edit Data Penjualan</h1>

        <form action="{{ route('sales_data.update', $salesData->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="date">Tanggal:</label>
                <input type="date" class="form-control" id="date" name="date" value="{{ $salesData->date }}" required>
            </div>
            <div class="form-group">
                <label for="sales">Penjualan:</label>
                <input type="number" class="form-control" id="sales" name="sales" step="0.01" value="{{ $salesData->sales }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="{{ route('sales_data.index') }}" class="btn btn-secondary">Batal</a>
        </form>
    </div>
</body>
</html>