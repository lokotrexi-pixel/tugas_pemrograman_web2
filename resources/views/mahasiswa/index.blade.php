@extends('mahasiswa.layout')

@section('content')
<div class="container">

    <h1>Sistem Informasi Mahasiswa</h1>

    <h3>Data Mahasiswa</h3>

    <a href="/mahasiswa/create">+ Tambah Mahasiswa</a>

    <br><br>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>NIM</th>
            <th>Nama</th>
            <th>Jurusan</th>
            <th>Email</th>
            <th>Aksi</th>
        </tr>

        @foreach ($mahasiswa as $mhs)
        <tr>
            <td>{{ $mhs->nim }}</td>
            <td>{{ $mhs->nama }}</td>
            <td>{{ $mhs->jurusan }}</td>
            <td>{{ $mhs->email }}</td>
            <td>
                <a href="/mahasiswa/{{ $mhs->id }}/edit">Edit</a>

                |

                <form action="/mahasiswa/{{ $mhs->id }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach

    </table>

</div>
@endsection