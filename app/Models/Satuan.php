<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Satuan extends Model
{
    use HasFactory;
    protected $fillable = [
        'satuan',
    ];

    public function usulan_komponen_program(){
        return $this->hasMany(UsulanKomponenProgram::class);
    }

    public function komponen_program(){
        return $this->hasMany(KomponenProgram::class);
    }
}
