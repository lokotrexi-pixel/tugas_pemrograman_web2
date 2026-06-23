<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Mahasiswa;

class MahasiswaSeeder extends Seeder
{
    public function run()
    {
        Mahasiswa::create([
            'nim' => '2023001',
            'nama' => 'Budi Santoso',
            'jurusan' => 'Informatika',
            'email' => 'budi@gmail.com',
            'alamat' => 'Yogyakarta'
        ]);
    }
}