<?php

namespace Database\Seeders;

use App\Models\KegiatanSiperada;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KegiatanSiperadaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        KegiatanSiperada::create([
            'name' => 'KegiatanSiperada',
        ]);
    }
}
