# Opened Files
## File Name
README.md
## File Content
# Sistem Informasi Mahasiswa

## Anggota

### Ketua

* Johan Purnomo

### Anggota 1 (Backend)

* Nikolaus Kuai

### Anggota 2 (Frontend UI)

* Hamdan Mahmud

### Anggota 3 (Database)

* Thomas Aquino Sanga Ola

### Anggota 4 (Testing & Dokumentasi)

* Purnomo

---

## Pembagian Tugas

### Ketua

* Mengatur repository GitHub
* Membuat struktur project Laravel
* Membuat model, migration, dan resource controller awal
* Menggabungkan hasil kerja anggota (merge)
* Mengatur branch dan workflow
* Deploy aplikasi

### Anggota 1 (Backend - CRUD)

* Mengembangkan Model Mahasiswa
* Mengisi Controller Mahasiswa
* Membuat CRUD (Create, Read, Update, Delete)
* Membuat dan mengatur Routing Laravel
* Validasi data input

### Anggota 2 (Frontend UI)

* Membuat Blade Template
* Mendesain halaman menggunakan Bootstrap/Tailwind
* Membuat layout aplikasi (navbar, tabel, form, dan halaman CRUD)

### Anggota 3 (Database)

* Menyusun struktur database
* Membuat ERD sederhana
* Membuat seeder database
* Pengelolaan data awal aplikasi

### Anggota 4 (Testing & Dokumentasi)

* Testing fitur CRUD
* Dokumentasi penggunaan aplikasi
* Screenshot hasil aplikasi
* Penyusunan laporan proyek

---

## Teknologi yang Digunakan

* Laravel
* PHP
* MySQL
* Bootstrap
* Git & GitHub

---

## Fitur Sistem

* Manajemen data mahasiswa
* Tambah data mahasiswa
* Lihat data mahasiswa
* Edit data mahasiswa
* Hapus data mahasiswa

# Opened Files
## File Name
app\Http\Controllers\MahasiswaController.php
## File Content
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{
    /**
     * Display all data
     */
    public function index()
    {
        $mahasiswa = Mahasiswa::all();
        return view('mahasiswa.index', compact('mahasiswa'));
    }

    /**
     * Show form create
     */
    public function create()
    {
        return view('mahasiswa.create');
    }

    /**
     * Store data
     */
    public function store(Request $request)
    {
        $request->validate([
            'nim' => 'required',
            'nama' => 'required',
            'jurusan' => 'required',
            'email' => 'required',
            'alamat' => 'required',
        ]);

        Mahasiswa::create([
            'nim' => $request->nim,
            'nama' => $request->nama,
            'jurusan' => $request->jurusan,
            'email' => $request->email,
            'alamat' => $request->alamat,
        ]);

        return redirect()->route('mahasiswa.index')->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Show detail data (SHOW)
     */
    public function show($id)
    {
        $mahasiswa = Mahasiswa::findOrFail($id);
        return view('mahasiswa.show', compact('mahasiswa'));
    }

    /**
     * Show form edit
     */
    public function edit($id)
    {
        $mahasiswa = Mahasiswa::findOrFail($id);
        return view('mahasiswa.edit', compact('mahasiswa'));
    }

    /**
     * Update data
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nim' => 'required',
            'nama' => 'required',
            'jurusan' => 'required',
            'email' => 'required',
            'alamat' => 'required',
        ]);

        $mahasiswa = Mahasiswa::findOrFail($id);

        $mahasiswa->update([
            'nim' => $request->nim,
            'nama' => $request->nama,
            'jurusan' => $request->jurusan,
            'email' => $request->email,
            'alamat' => $request->alamat,
        ]);

        return redirect()->route('mahasiswa.index')->with('success', 'Data berhasil diupdate');
    }

    /**
     * Delete data
     */
    public function destroy($id)
    {
        $mahasiswa = Mahasiswa::findOrFail($id);
        $mahasiswa->delete();

        return redirect()->route('mahasiswa.index')->with('success', 'Data berhasil dihapus');
    }
}
# Opened Files
## File Name
resources\views\mahasiswa\index.blade.php
## File Content
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
