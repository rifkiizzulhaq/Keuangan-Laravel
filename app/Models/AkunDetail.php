<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AkunDetail extends Model
{
    use HasFactory;
    protected $fillable = [
        'kode',
        'uraian',
        'usulan_komponen_program_id',
    ];

    public function UsulanKomponenProgram()
    {
        return $this->hasMany(UsulanKomponenProgram::class);
    }
}
