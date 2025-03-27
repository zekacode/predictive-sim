<!DOCTYPE html>
<html>
<head>
    <title>Data Penjualan</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .container {
            margin-top: 50px;
        }
        .card {
            padding: 20px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }
        .table th {
            background-color: #007bff;
            color: white;
        }
        .btn {
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="card">
            <h2 class="text-center text-primary">📊 Data Penjualan</h2>

            @if ($message = Session::get('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <p>{{ $message }}</p>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <div class="d-flex justify-content-between mb-3">
                <a href="{{ route('sales_data.create') }}" class="btn btn-success"><i class="fa fa-plus"></i> Tambah Data</a>
            </div>

            <table class="table table-hover table-bordered text-center">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Tanggal</th>
                        <th>Penjualan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($salesData as $data)
                        <tr>
                            <td>{{ $data->id }}</td>
                            <td>{{ $data->date }}</td>
                            <td>Rp {{ number_format($data->sales, 2, ',', '.') }}</td>
                            <td>
                                <a href="{{ route('sales_data.show', $data->id) }}" class="btn btn-info btn-sm"><i class="fa fa-eye"></i></a>
                                <a href="{{ route('sales_data.edit', $data->id) }}" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                                <form action="{{ route('sales_data.destroy', $data->id) }}" method="POST" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>