<?php

namespace Database\Seeders;

use App\Models\AkunDetail;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AkunDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        AkunDetail::create([
            'kode' => '52221',
            'uraian' => 'Pembelian Licensi microsoft',
        ]);
    }
}
