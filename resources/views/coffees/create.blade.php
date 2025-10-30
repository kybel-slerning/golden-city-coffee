<!DOCTYPE html>
<html>
<head>
    <title>Tambah Kopi - Golden City</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-dark text-warning">
    <div class="container mt-5">
        <h1 class="text-center mb-4">TAMBAH KOPI BARU</h1>
        <a href="{{ route('coffees.index') }}" class="btn btn-secondary mb-3">Kembali</a>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <form action="{{ route('coffees.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label>Nama Kopi</label>
                <input type="text" name="name" class="form-control bg-dark text-white" required>
            </div>
            <div class="mb-3">
                <label>Harga (Rp)</label>
                <input type="number" name="price" class="form-control bg-dark text-white" required>
            </div>
            <div class="mb-3">
                <label>Deskripsi</label>
                <textarea name="description" class="form-control bg-dark text-white" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-success">SIMPAN KOPI</button>
        </form>
    </div>
</body>
</html>
