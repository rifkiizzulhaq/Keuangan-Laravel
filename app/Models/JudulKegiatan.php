<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JudulKegiatan extends Model
{
    use HasFactory;
    protected $fillable = [
        'kegiatan_id',
        'kode',
        'judul_kegiatan',

    ];

    public function kegiatan()
    {
        return $this->belongsTo(Kegiatan::class);
    }
}
