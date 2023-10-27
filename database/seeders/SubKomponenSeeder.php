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
            'kode' => 20,
            'sub_komponen' => 'Pengadaan Tanah',
            // 'komponen_id' => 1,
        ]);
    }
}
