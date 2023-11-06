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
        'volume',
        'harga_satuan',
    ];

    public function usulan(){
        return $this->belongsTo(Usulan::class);
    }
    public function komponen_program(){
        return $this->belongsTo(KomponenProgram::class);
    }
}
