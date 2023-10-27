<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubKomponen extends Model
{
    use HasFactory;
    protected $fillable = [
        'kode',
        'sub_komponen',
        // 'komponen_id',
    ];

    
}
