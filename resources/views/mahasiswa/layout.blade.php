<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Informasi Mahasiswa</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body{
            background:#f4f7fc;
        }

        .navbar-custom{
            background:linear-gradient(90deg,#2563eb,#1d4ed8);
            box-shadow:0 2px 15px rgba(0,0,0,.15);
        }

        .card-dashboard{
            border:none;
            border-radius:15px;
            box-shadow:0 4px 15px rgba(0,0,0,.08);
        }

        .table-card{
            border:none;
            border-radius:15px;
            overflow:hidden;
            box-shadow:0 4px 15px rgba(0,0,0,.08);
        }

        footer{
            margin-top:50px;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark navbar-custom">
    <div class="container">

        <a class="navbar-brand fw-bold" href="/mahasiswa">
            🎓 Sistem Informasi Mahasiswa
        </a>

        <div>
            <span class="text-white me-3">
                Laravel + PostgreSQL
            </span>

            <a href="/mahasiswa/create"
               class="btn btn-light fw-semibold">
                + Tambah Mahasiswa
            </a>
        </div>

    </div>
</nav>

<div class="container mt-4">
    @yield('content')
</div>

<footer class="text-center text-muted">
    <hr>

    <p>
        © 2026 Sistem Informasi Mahasiswa
    </p>

    <p>
        Laravel 8 • PostgreSQL • Railway • Supabase
    </p>
</footer>

</body>
</html>