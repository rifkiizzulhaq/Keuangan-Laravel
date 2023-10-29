<?php

namespace Database\Seeders;

use App\Models\Komponen;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KomponenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Komponen::create([
            'kode' => 004,
            'kegiatan_siperada_id' => 1,
            'komponen' => 'Dukungan Oprasional PTN',
        ]);
        Komponen::create([
            'kode' => 005,
            'kegiatan_siperada_id' => 1,
            'komponen' => 'Dukungan Oprasional Penyelenggara Pendidikan',
        ]);
    }
}
