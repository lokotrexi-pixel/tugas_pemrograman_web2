@extends('mahasiswa.layout')

@section('content')

<h2>Detail Mahasiswa</h2>

<p><b>NIM:</b> {{ $mahasiswa->nim }}</p>
<p><b>Nama:</b> {{ $mahasiswa->nama }}</p>
<p><b>Jurusan:</b> {{ $mahasiswa->jurusan }}</p>
<p><b>Email:</b> {{ $mahasiswa->email }}</p>
<p><b>Alamat:</b> {{ $mahasiswa->alamat }}</p>

<a href="{{ route('mahasiswa.index') }}">Kembali</a>

@endsection