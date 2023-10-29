<?php

namespace Database\Seeders;

use App\Models\SubKomponen;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubKomponenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SubKomponen::create([
            'kode' => 234,
            'kegiatan_siperada_id' => 1,
            'sub_komponen' => 'Pengadaan Tanah',
            // 'komponen_id' => 1,
        ]);
    }
}
