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

        <form action="{{ route('coffees.update', $coffee) }}" method="POST">
    @csrf @method('PUT')
    <!-- sama seperti create, tapi value diisi -->
    <input type="text" name="name" value="{{ $coffee->name }}" class="form-control" required>
    <input type="number" name="price" value="{{ $coffee->price }}" class="form-control" required>
    <textarea name="description" class="form-control">{{ $coffee->description }}</textarea>
    <button type="submit" class="btn btn-warning">UPDATE</button>
</form>

    </div>
</body>
</html>

