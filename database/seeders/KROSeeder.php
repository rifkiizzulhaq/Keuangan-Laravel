<?php

namespace Database\Seeders;

use App\Models\kro;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KROSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        kro::create([
            'kode' => 180,
            'kegiatan_siperada_id' => 1,
            'kro' => 'Bantuan Lembaga [Base Line]',
        ]);
        kro::create([
            'kode' => 220,
            'kegiatan_siperada_id' => 1,
            'kro' => 'Pendidikan Tinggi [Base Line]',
        ]);
    }
}
