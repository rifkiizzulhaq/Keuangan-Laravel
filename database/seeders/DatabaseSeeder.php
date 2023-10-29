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
        $this->call(KegiatanSiperadaSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(ProgramSeeder::class);
        $this->call(KROSeeder::class);
        $this->call(ROSeeder::class);
        $this->call(KomponenSeeder::class);
        $this->call(KegiatanSeeder::class);
        $this->call(SubKomponenSeeder::class);
        $this->call(SubKomponenDetailSeeder::class);
        $this->call(UsulanKegiatanSeeder::class);
    }
}
