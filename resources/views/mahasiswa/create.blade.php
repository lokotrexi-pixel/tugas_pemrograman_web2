@extends('mahasiswa.layout')

@section('content')
<div class="container">

    <h2>Tambah Mahasiswa</h2>

    <form method="POST" action="/mahasiswa">
        @csrf

        <label>NIM</label><br>
        <input type="text" name="nim"><br><br>

        <label>Nama</label><br>
        <input type="text" name="nama"><br><br>

        <label>Jurusan</label><br>
        <input type="text" name="jurusan"><br><br>

        <label>Email</label><br>
        <input type="email" name="email"><br><br>

        <label>Alamat</label><br>
        <textarea name="alamat"></textarea><br><br>

        <button type="submit">Simpan</button>
    </form>

</div>
@endsection