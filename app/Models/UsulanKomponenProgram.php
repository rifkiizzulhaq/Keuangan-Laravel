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
        // 'satuan_id',
        // 'akun_detail_id',
        'volume',
        'harga_satuan',
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

}
