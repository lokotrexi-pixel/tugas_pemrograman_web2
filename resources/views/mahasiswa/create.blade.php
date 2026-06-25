@extends('mahasiswa.layout')

@section('content')

<div class="card shadow border-0">

    <div class="card-body">

        <h2 class="mb-4">
            ➕ Tambah Mahasiswa
        </h2>

        <form method="POST" action="/mahasiswa">

            @csrf

            <div class="mb-3">
                <label>NIM</label>
                <input class="form-control" type="text" name="nim">
            </div>

            <div class="mb-3">
                <label>Nama</label>
                <input class="form-control" type="text" name="nama">
            </div>

            <div class="mb-3">
                <label>Jurusan</label>
                <input class="form-control" type="text" name="jurusan">
            </div>

            <div class="mb-3">
                <label>Email</label>
                <input class="form-control" type="email" name="email">
            </div>

            <div class="mb-3">
                <label>Alamat</label>
                <textarea class="form-control" name="alamat"></textarea>
            </div>

            <button class="btn btn-primary">
                Simpan Data
            </button>

            <a href="/mahasiswa"
               class="btn btn-secondary">
                Kembali
            </a>

        </form>

    </div>

</div>

@endsection