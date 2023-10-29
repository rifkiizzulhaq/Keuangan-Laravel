<?php

namespace Database\Seeders;

use App\Models\Kegiatan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KegiatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Kegiatan::create([
            'kode' => 4466,
            'kegiatan_siperada_id' => 1,
            'kegiatan' => 'Penyediaan dana bantuan oprasional pendidikan',
        ]);
        Kegiatan::create([
            'kode' => 4467,
            'kegiatan_siperada_id' => 1,
            'kegiatan' => 'Peningkatan kualitas dan kapasitas perguruan Tinggi Vokasi',
        ]);
    }
}
