<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usulan extends Model
{
    use HasFactory;
    protected $fillable = [
        'unit_id',
        'tahun',
    ];

    public function unit(){
        return $this->belongsTo(Unit::class);
    }
    public function usulan_komponen_program(){
        return $this->hasMany(UsulanKomponenProgram::class);
    }
}
