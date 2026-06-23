@extends('mahasiswa.layout')

@section('content')

<a href="{{ route('mahasiswa.create') }}">+ Tambah Mahasiswa</a>

<table border="1" cellpadding="10">
    <tr>
        <th>NIM</th>
        <th>Nama</th>
        <th>Jurusan</th>
        <th>Email</th>
        <th>Aksi</th>
    </tr>

    @foreach($mahasiswa as $m)
    <tr>
        <td>{{ $m->nim }}</td>
        <td>{{ $m->nama }}</td>
        <td>{{ $m->jurusan }}</td>
        <td>{{ $m->email }}</td>
        <td>
            <a href="{{ route('mahasiswa.show', $m->id) }}">Lihat</a>
            <a href="{{ route('mahasiswa.edit', $m->id) }}">Edit</a>

            <form action="{{ route('mahasiswa.destroy', $m->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit">Hapus</button>
            </form>
        </td>
    </tr>
    @endforeach

</table>

@endsection