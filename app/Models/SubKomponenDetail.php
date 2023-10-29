<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubKomponenDetail extends Model
{
    use HasFactory;
    protected $fillable = [
        'kegiatan_siperada_id',
        'kode',
        'sub_komponen_detail',
        // 'sub_komponen_id',
    ];
}
