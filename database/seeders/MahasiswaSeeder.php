<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MahasiswaSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('mahasiswas')->insert([
            'nim' => '241110024',
            'nama' => 'Johan',
            'jurusan' => 'Informatika',
            'email' => 'johan@gmail.com',
            'alamat' => 'Yogyakarta'
        ]);
    }
}