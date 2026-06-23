@extends('mahasiswa.layout')

@section('content')

<h2>Data Mahasiswa</h2>

<table class="table table-striped table-bordered mt-3">
    <thead class="table-dark">
        <tr>
            <th>NIM</th>
            <th>Nama</th>
            <th>Jurusan</th>
            <th>Email</th>
            <th>Aksi</th>
        </tr>
    </thead>

    <tbody>
        @foreach ($mahasiswa as $mhs)
        <tr>
            <td>{{ $mhs->nim }}</td>
            <td>{{ $mhs->nama }}</td>
            <td>{{ $mhs->jurusan }}</td>
            <td>{{ $mhs->email }}</td>
            <td>
                <a class="btn btn-warning btn-sm"
                   href="/mahasiswa/{{ $mhs->id }}/edit">
                    Edit
                </a>

                <form action="/mahasiswa/{{ $mhs->id }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')

                    <button class="btn btn-danger btn-sm" type="submit">
                        Hapus
                    </button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection