<!DOCTYPE html>
<html>
<head>
    <title>Detail Data Penjualan</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Detail Data Penjualan</h1>
        <p><strong>ID:</strong> {{ $salesData->id }}</p>
        <p><strong>Tanggal:</strong> {{ $salesData->date }}</p>
        <p><strong>Penjualan:</strong> {{ $salesData->sales }}</p>
        <a href="{{ route('sales_data.index') }}" class="btn btn-secondary">Kembali</a>
    </div>
</body>
</html>