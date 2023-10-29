<?php

namespace Database\Seeders;

use App\Models\SubKomponenDetail;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubKomponenDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SubKomponenDetail::create([
            'kode' =>40,
            'kegiatan_siperada_id' => 1,
            'sub_komponen_detail' => 'Pengadaan Tanah',
        ]);
    }
}
