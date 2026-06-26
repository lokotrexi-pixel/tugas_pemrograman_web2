@extends('mahasiswa.layout')

@section('content')

@if(session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif

<div class="card card-dashboard mb-4">
    <div class="card-body">
        <h2>🎓 Sistem Informasi Mahasiswa</h2>

        <p class="text-muted mb-0">
            Kelola data mahasiswa secara cepat, aman dan terintegrasi dengan PostgreSQL Cloud Database.
        </p>
    </div>
</div>

<div class="row mb-4">

    <div class="col-md-4">
        <div class="card card-dashboard">
            <div class="card-body">
                <h6 class="text-muted">Total Mahasiswa</h6>
                <h1 id="jumlahData">{{ count($mahasiswa) }}</h1>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card card-dashboard">
            <div class="card-body">
                <h6 class="text-muted">Database</h6>
                <h4>PostgreSQL</h4>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card card-dashboard">
            <div class="card-body">
                <h6 class="text-muted">Status Sistem</h6>
                <h4 class="text-success">Online</h4>
            </div>
        </div>
    </div>

</div>

<div class="card shadow-sm border-0 mb-4">
    <div class="card-body">

        <label class="form-label fw-bold">
            📋 Daftar Identitas Mahasiswa
        </label>

        <input
            type="text"
            id="searchInput"
            class="form-control"
            placeholder="Cari berdasarkan Nama, NIM, Jurusan, Email atau Alamat..."
        >

        <small class="text-muted mt-2 d-block">
            Menampilkan
            <span id="hasilPencarian">{{ count($mahasiswa) }}</span>
            dari
            {{ count($mahasiswa) }}
            mahasiswa
        </small>

    </div>
</div>

<div class="card table-card">

    <div class="card-body">

        <div class="d-flex justify-content-between align-items-center mb-3">

            <h2>Data Mahasiswa</h2>

            <a href="/mahasiswa/create"
               class="btn btn-primary">
                Tambah Mahasiswa
            </a>

        </div>

        <table class="table table-hover align-middle">

            <thead class="table-primary">
                <tr>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Jurusan</th>
                    <th>Email</th>
                    <th>Alamat</th>
                    <th>Aksi</th>
                </tr>
            </thead>

            <tbody id="tableBody">

            @foreach ($mahasiswa as $mhs)

                <tr>

                    <td>{{ $mhs->nim }}</td>

                    <td class="nama">
                        <strong>{{ $mhs->nama }}</strong>
                    </td>

                    <td class="jurusan">
                        <span class="badge bg-success">
                            {{ $mhs->jurusan }}
                        </span>
                    </td>

                    <td class="email">
                        {{ $mhs->email }}
                    </td>

                    <td class="alamat">
                        {{ $mhs->alamat }}
                    </td>

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
                                class="btn btn-danger btn-sm">
                                Hapus
                            </button>

                        </form>

                    </td>

                </tr>

            @endforeach

            </tbody>

        </table>

        <div
            id="notFound"
            class="alert alert-warning text-center mt-3"
            style="display:none;">

            Mahasiswa tidak ditemukan.

        </div>

    </div>

</div>

<script>

const input=document.getElementById('searchInput');
const rows=document.querySelectorAll('#tableBody tr');
const hasil=document.getElementById('hasilPencarian');
const kosong=document.getElementById('notFound');

input.addEventListener('keyup',function(){

let keyword=this.value.toLowerCase();

let tampil=0;

rows.forEach(function(row){

let text=row.innerText.toLowerCase();

if(text.indexOf(keyword)>-1){

row.style.display='';

tampil++;

}else{

row.style.display='none';

}

});

hasil.innerHTML=tampil;

if(tampil==0){

kosong.style.display='block';

}else{

kosong.style.display='none';

}

});

</script>

@endsection