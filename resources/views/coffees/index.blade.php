<!DOCTYPE html>
<html>
<head>
    <title>Golden City Coffee</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-dark text-warning">
    <div class="container mt-5">
        <h1 class="text-center mb-4">GOLDEN CITY COFFEE</h1>
        <a href="/coffees/create" class="btn btn-success mb-3">+ Tambah Kopi</a>
        <table class="table table-striped table-dark">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Harga</th>
                    <th>Deskripsi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($coffees as $coffee)
                <tr>
                    <td>{{ $coffee->name }}</td>
                    <td>Rp {{ number_format($coffee->price) }}</td>
                    <td>{{ $coffee->description }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
