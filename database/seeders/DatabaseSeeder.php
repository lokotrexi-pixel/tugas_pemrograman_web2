<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Mahasiswa;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            MahasiswaSeeder::class,
        ]);
    }
}