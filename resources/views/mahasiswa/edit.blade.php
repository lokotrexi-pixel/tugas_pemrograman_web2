@extends('mahasiswa.layout')

@section('content')

<h2>Edit Mahasiswa</h2>

<form action="{{ route('mahasiswa.update', $mahasiswa->id) }}" method="POST">
    @csrf
    @method('PUT')

    <input type="text" name="nim" value="{{ $mahasiswa->nim }}"><br><br>
    <input type="text" name="nama" value="{{ $mahasiswa->nama }}"><br><br>
    <input type="text" name="jurusan" value="{{ $mahasiswa->jurusan }}"><br><br>
    <input type="email" name="email" value="{{ $mahasiswa->email }}"><br><br>
    <textarea name="alamat">{{ $mahasiswa->alamat }}</textarea><br><br>

    <button type="submit">Update</button>
</form>

@endsection