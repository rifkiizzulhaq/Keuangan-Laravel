<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsulanDetailHasRincian extends Model
{
    use HasFactory;
    protected $fillable = [
        'kegiatan_id',
        'detail',
        'volume',
        'satuan',
        'harga_satuan',
    ];

    public function usulan_komponen_program()
    {
        return $this->belongsTo(UsulanKomponenProgram::class, 'usulan_komponen_program_id');
    }

    public function akun_detail()
    {
        return $this->belongsTo(AkunDetail::class);
    }

    public function kegiatan()
    {
        return $this->belongsTo(Kegiatan::class);
    }
}
