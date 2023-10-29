<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubKomponen extends Model
{
    use HasFactory;
    protected $fillable = [
        'kegiatan_siperada_id',
        'kode',
        'sub_komponen',
        // 'komponen_id',
    ];

    public function kegiatan_siperada()
    {
        return $this->belongsTo(KegiatanSiperada::class);
    }


}
