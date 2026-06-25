@extends('mahasiswa.layout')

@section('content')

<div class="row mb-4">

```
<div class="col-md-4">
    <div class="card card-stat">
        <div class="card-body">
            <h6 class="text-muted">Total Mahasiswa</h6>
            <h2>{{ $mahasiswa->count() }}</h2>
        </div>
    </div>
</div>
```

</div>

<div class="table-container">

```
<div class="d-flex justify-content-between align-items-center mb-3">
    <h2>Data Mahasiswa</h2>

    <a href="/mahasiswa/create" class="btn btn-primary">
        Tambah Mahasiswa
    </a>
</div>

<div class="table-responsive">

    <table class="table table-hover align-middle">

        <thead class="table-primary">
            <tr>
                <th>NIM</th>
                <th>Nama</th>
                <th>Jurusan</th>
                <th>Email</th>
                <th>Alamat</th>
                <th width="180">Aksi</th>
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

                    <form
                        action="/mahasiswa/{{ $mhs->id }}"
                        method="POST"
                        style="display:inline;">

                        @csrf
                        @method('DELETE')

                        <button
                            type="submit"
                            class="btn btn-danger btn-sm"
                            onclick="return confirm('Yakin ingin menghapus data ini?')">
                            Hapus
                        </button>

                    </form>

                </td>

            </tr>

        @endforeach

        </tbody>

    </table>

</div>
```

</div>

@endsection
