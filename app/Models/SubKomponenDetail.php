<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubKomponenDetail extends Model
{
    use HasFactory;
    protected $fillable = [
        'kode',
        'sub_komponen_detail',
        // 'sub_komponen_id',
    ];
}
