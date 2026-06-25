@extends('mahasiswa.layout')

@section('content')

<div class="card shadow border-0">

```
<div class="card-header bg-success text-white">
    <h4 class="mb-0">Edit Data Mahasiswa</h4>
</div>

<div class="card-body">

    <form method="POST" action="/mahasiswa/{{ $mahasiswa->id }}">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label">NIM</label>
            <input
                class="form-control"
                type="text"
                name="nim"
                value="{{ $mahasiswa->nim }}"
                required>
        </div>

        <div class="mb-3">
            <label class="form-label">Nama</label>
            <input
                class="form-control"
                type="text"
                name="nama"
                value="{{ $mahasiswa->nama }}"
                required>
        </div>

        <div class="mb-3">
            <label class="form-label">Jurusan</label>
            <input
                class="form-control"
                type="text"
                name="jurusan"
                value="{{ $mahasiswa->jurusan }}"
                required>
        </div>

        <div class="mb-3">
            <label class="form-label">Email</label>
            <input
                class="form-control"
                type="email"
                name="email"
                value="{{ $mahasiswa->email }}"
                required>
        </div>

        <div class="mb-3">
            <label class="form-label">Alamat</label>
            <textarea
                class="form-control"
                rows="3"
                name="alamat">{{ $mahasiswa->alamat }}</textarea>
        </div>

        <button class="btn btn-success">
            Update Data
        </button>

        <a href="/mahasiswa" class="btn btn-secondary">
            Kembali
        </a>

    </form>

</div>
```

</div>

@endsection
