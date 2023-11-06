<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Kegiatan;
use App\Models\UsulanKegiatan;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(UserSeeder::class);
        $this->call(KategoriSeeder::class);
        $this->call(SatuanSeeder::class);
        $this->call(AkunDetailSeeder::class);
        $this->call(KomponenProgramSeeder::class);
        $this->call(UsulanSeeder::class);
    }
}
