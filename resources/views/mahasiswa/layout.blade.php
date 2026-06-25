<!DOCTYPE html>

<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Informasi Mahasiswa</title>

```
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
    body{
        background-color:#f5f7fa;
    }

    .navbar-brand{
        font-weight:bold;
        font-size:1.2rem;
    }

    .card-stat{
        border:none;
        border-radius:15px;
        box-shadow:0 4px 10px rgba(0,0,0,.08);
    }

    .table-container{
        background:white;
        border-radius:15px;
        padding:20px;
        box-shadow:0 4px 10px rgba(0,0,0,.08);
    }

    footer{
        margin-top:50px;
        padding:20px;
        text-align:center;
        color:#666;
    }
</style>
```

</head>

<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow">
    <div class="container">

```
    <a class="navbar-brand" href="/mahasiswa">
        🎓 Sistem Informasi Mahasiswa
    </a>

    <div>
        <a href="/mahasiswa/create" class="btn btn-light btn-sm fw-bold">
            + Tambah Mahasiswa
        </a>
    </div>

</div>
```

</nav>

<div class="container mt-4">
    @yield('content')
</div>

<footer>
    Sistem Informasi Mahasiswa | Laravel + PostgreSQL + Railway
</footer>

</body>
</html>
