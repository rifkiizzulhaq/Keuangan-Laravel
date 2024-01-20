<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kegiatan extends Model
{
    use HasFactory;
    protected $fillable = [
        'usulan_komponen_program_id',
        'akun_detail_id',
        'judul_kegiatan'
    ];

    public function usulan_komponen_program()
    {
        return $this->belongsTo(UsulanKomponenProgram::class);
    }

    public function usulan_detail_has_rincian()
    {
        return $this->hasMany(UsulanDetailHasRincian::class);
    }

    public function akun_detail()
    {
        return $this->belongsToMany(AkunDetail::class, 'usulan_detail_has_rincians');
    }
}
