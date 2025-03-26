<!DOCTYPE html>
<html>
<head>
    <title>Data Penjualan</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Data Penjualan</h1>

        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif

        <a href="{{ route('sales_data.create') }}" class="btn btn-primary">Tambah Data</a>

        <table class="table table-bordered">
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
                        <td>{{ $data->sales }}</td>
                        <td>
                            <a href="{{ route('sales_data.show', $data->id) }}" class="btn btn-info">Lihat</a>
                            <a href="{{ route('sales_data.edit', $data->id) }}" class="btn btn-primary">Edit</a>
                            <form action="{{ route('sales_data.destroy', $data->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>