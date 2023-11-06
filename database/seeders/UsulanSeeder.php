<?php

namespace Database\Seeders;

use App\Models\Usulan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsulanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Usulan::create([
            'unit_id' => 1,
            'tahun' => '2023',
        ]);
    }
}
