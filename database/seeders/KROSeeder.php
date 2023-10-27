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
            'kode' => 1,
            'kro' => 'Bantuan Lembaga [Base Line]',
        ]);
        kro::create([
            'kode' => 2,
            'kro' => 'Pendidikan Tinggi [Base Line]',
        ]);
    }
}
