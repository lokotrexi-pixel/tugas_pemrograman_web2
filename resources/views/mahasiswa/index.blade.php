@extends('mahasiswa.layout')

@section('content')

@if(session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif

<div class="card card-dashboard mb-4">
    <div class="card-body">
        <h2>🎓 Sistem Informasi Mahasiswa</h2>

        <p class="text-muted mb-0">
            Kelola data mahasiswa secara cepat, aman dan terintegrasi dengan PostgreSQL Cloud Database.
        </p>
    </div>
</div>

<div class="row mb-4">

    <div class="col-md-4">
        <div class="card card-dashboard">
            <div class="card-body">
                <h6 class="text-muted">Total Mahasiswa</h6>
                <h1>{{ count($mahasiswa) }}</h1>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card card-dashboard">
            <div class="card-body">
                <h6 class="text-muted">Database</h6>
                <h4>PostgreSQL</h4>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card card-dashboard">
            <div class="card-body">
                <h6 class="text-muted">Status Sistem</h6>
                <h4 class="text-success">Online</h4>
            </div>
        </div>
    </div>

</div>

<div class="mb-3">
    <input
        type="text"
        class="form-control"
        placeholder=" 📋Daftar Identitas Mahasiswa"
    >
</div>

<div class="card table-card">
    <div class="card-body">

        <div class="d-flex justify-content-between align-items-center mb-3">
            <h2>Data Mahasiswa</h2>

            <a href="/mahasiswa/create"
               class="btn btn-primary">
                Tambah Mahasiswa
            </a>
        </div>

        <table class="table table-hover align-middle">

            <thead class="table-primary">
                <tr>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Jurusan</th>
                    <th>Email</th>
                    <th>Alamat</th>
                    <th>Aksi</th>
                </tr>
            </thead>

            <tbody>

            @foreach ($mahasiswa as $mhs)

                <tr>
                    <td>{{ $mhs->nim }}</td>

                    <td>
                        <strong>{{ $mhs->nama }}</strong>
                    </td>

                    <td>
                        <span class="badge bg-success">
                            {{ $mhs->jurusan }}
                        </span>
                    </td>

                    <td>{{ $mhs->email }}</td>

                    <td>{{ $mhs->alamat }}</td>

                    <td>

                        <a href="/mahasiswa/{{ $mhs->id }}/edit"
                           class="btn btn-warning btn-sm">
                            Edit
                        </a>

                        <form action="/mahasiswa/{{ $mhs->id }}"
                              method="POST"
                              style="display:inline;">
                            @csrf
                            @method('DELETE')

                            <button class="btn btn-danger btn-sm">
                                Hapus
                            </button>
                        </form>

                    </td>

                </tr>

            @endforeach

            </tbody>

        </table>

    </div>
</div>

@endsection