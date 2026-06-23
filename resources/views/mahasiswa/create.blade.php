@extends('mahasiswa.layout')

@section('content')

<h2>Tambah Mahasiswa</h2>

<form action="{{ route('mahasiswa.store') }}" method="POST">
    @csrf

    <input type="text" name="nim" placeholder="NIM"><br><br>
    <input type="text" name="nama" placeholder="Nama"><br><br>
    <input type="text" name="jurusan" placeholder="Jurusan"><br><br>
    <input type="email" name="email" placeholder="Email"><br><br>
    <textarea name="alamat" placeholder="Alamat"></textarea><br><br>

    <button type="submit">Simpan</button>
</form>

@endsection