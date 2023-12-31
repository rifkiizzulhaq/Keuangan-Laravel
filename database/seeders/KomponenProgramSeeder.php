<?php

namespace Database\Seeders;

use App\Models\Kategori;
use App\Models\KomponenProgram;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KomponenProgramSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $Kategori = Kategori::create([
            'kategori' => 'Program',
        ]);

        $Kategori1 = Kategori::create([
            'kategori' => 'Kegiatan',
        ]);

        $Kategori2 = Kategori::create([
            'kategori' => 'kro',
        ]);

        $Kategori3 = Kategori::create([
            'kategori' => 'ro',
        ]);

        KomponenProgram::create([
            'kategori_id' => $Kategori->id,
            'kode' => '023.18.DL',
            'uraian' => 'Program Pendidikan dan Pelatihan Vokasi',
        ]);

        KomponenProgram::create([
            'kategori_id' => $Kategori1->id,
            'parent_id' => 1,
            'kode' => '4466',
            'uraian' => 'Penyediaan Dana Bantuan Operasional Perguruan Tinggi Negeri Vokasi',
        ]);

        KomponenProgram::create([
            'kategori_id' => $Kategori2->id,
            'parent_id' => 2,
            'kode' => '4466.BEI',
            'uraian' => 'Bantuan Lembaga[Base Line]',
        ]);

        KomponenProgram::create([
            'kategori_id' => $Kategori3->id,
            'parent_id' => 3,
            'kode' => '4466.BEI.001',
            'uraian' => 'Dukungan Operasional PTN (BOPTN Vokasi)',
        ]);
    }
}
