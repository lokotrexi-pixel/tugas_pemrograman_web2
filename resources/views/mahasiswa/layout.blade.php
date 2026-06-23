<!DOCTYPE html>
<html>
<head>
    <title>Sistem Informasi Mahasiswa</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<!-- NAVBAR -->
<nav class="navbar navbar-dark bg-dark px-3">
    <a class="navbar-brand text-white" href="/mahasiswa">
        Sistem Mahasiswa
    </a>

    <a class="btn btn-primary btn-sm" href="/mahasiswa/create">
        + Tambah Mahasiswa
    </a>
</nav>

<!-- CONTENT -->
<div class="container mt-4">
    @yield('content')
</div>

</body>
</html>