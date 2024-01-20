<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsulanKomponenProgram extends Model
{
    use HasFactory;
    protected $fillable = [
        'usulan_id',
        'komponen_program_id',
        'usulan_detail_has_rincian_id',
        // 'satuan_id',
        // 'akun_detail_id',
        'volume',
        'harga_satuan',
        'kegiatan_id',
    ];

    public function usulan(){
        return $this->belongsTo(Usulan::class);
    }
    public function komponen_program(){
        return $this->belongsTo(KomponenProgram::class);
    }

    public function satuan(){
        return $this->belongsTo(Satuan::class);
    }

    public function akun_detail()
    {
        return $this->belongsTo(AkunDetail::class);
    }

    public function usulan_komponen_program_details()
    {
        return $this->hasMany(UsulanKomponenProgramDetail::class);
    }

    public function usulan_detail_has_rincians()
    {
        return $this->hasMany(UsulanDetailHasRincian::class);
    }

    public function kegiatans(){
        return $this->hasMany(Kegiatan::class);
    }
}
