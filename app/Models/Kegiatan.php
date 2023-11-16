<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kegiatan extends Model
{
    use HasFactory;
    protected $fillable = [
        'usulan_komponen_program_id',
    ];

    public function usulan_komponen_program(){
        return $this->belongsTo(UsulanKomponenProgram::class);
    }
}
