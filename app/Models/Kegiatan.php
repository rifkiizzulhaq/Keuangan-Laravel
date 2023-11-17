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
        'satuan_id',
        'volume',
        'satuan',
    ];

    // public function usulan_komponen_program(){
    //     return $this->belongsTo(UsulanKomponenProgram::class);
    // }

    public function satuan(){
        return $this->belongsTo(Satuan::class);
    }

    public function akun_detail(){
        return $this->belongsTo(AkunDetail::class);
    }
}
