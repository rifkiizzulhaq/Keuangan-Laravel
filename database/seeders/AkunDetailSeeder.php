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
            'kode' => '52115',
            'uraian' => 'belanja honor oprasional satuan kerja',
        ]);
    }
}
