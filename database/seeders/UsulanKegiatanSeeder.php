<?php

namespace Database\Seeders;

use App\Models\UsulanKegiatan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsulanKegiatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        UsulanKegiatan::create([
            'unit_id' => 1,
            'tahun_anggaran' => '2023-11-11',
            'rincian' => 'gak tau males',
            'volume' => 20,
            'satuan' => 'males',
            'harga_satuan' => 200000,
        ]);
    }
}
