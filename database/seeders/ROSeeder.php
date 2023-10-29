<?php

namespace Database\Seeders;

use App\Models\ro;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ROSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ro::create([
            'kode' => 100,
            'kegiatan_siperada_id' => 1,
            'ro' => 'Dukungan Oprasional PTN',
        ]);
        ro::create([
            'kode' => 200,
            'kegiatan_siperada_id' => 1,
            'ro' => 'Layanan Pendidikan',
        ]);
    }
}
