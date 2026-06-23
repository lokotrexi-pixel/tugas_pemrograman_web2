@extends('mahasiswa.layout')

@section('content')
<div class="container">

    <h2>Edit Mahasiswa</h2>

    <form method="POST" action="/mahasiswa/{{ $mahasiswa->id }}">
        @csrf
        @method('PUT')

        <label>NIM</label><br>
        <input type="text" name="nim" value="{{ $mahasiswa->nim }}"><br><br>

        <label>Nama</label><br>
        <input type="text" name="nama" value="{{ $mahasiswa->nama }}"><br><br>

        <label>Jurusan</label><br>
        <input type="text" name="jurusan" value="{{ $mahasiswa->jurusan }}"><br><br>

        <label>Email</label><br>
        <input type="email" name="email" value="{{ $mahasiswa->email }}"><br><br>

        <label>Alamat</label><br>
        <textarea name="alamat">{{ $mahasiswa->alamat }}</textarea><br><br>

        <button type="submit">Update</button>
    </form>

</div>
@endsection