<?php

namespace Database\Seeders;

use App\Models\Porgram;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProgramSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Porgram::create([
            'kode' => 30,
            'kegiatan_siperada_id' => 1,
            'program' => 'Program Pendidikan dan Vokasi',
        ]);
        Porgram::create([
            'kode' => 4,
            'kegiatan_siperada_id' => 1,
            'program' => 'Pembangunan Gedung Polindra',
        ]);
    }
}
