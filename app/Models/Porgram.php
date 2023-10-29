<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Porgram extends Model
{
    use HasFactory;
    protected $fillable = [
        // 'admin_id',
        // 'usulan_kegiatans_id',
        'kegiatan_siperada_id', // 'kegiatan_siperada_id
        'kode',
        'program',
    ];

    public function kegiatan_siperada()
    {
        return $this->belongsTo(KegiatanSiperada::class);
    }

    // public function admin()
    // {
    //     return $this->belongsTo(Admin::class);
    // }

    // public function usulan_kegiatan()
    // {
    //     return $this->belongsTo(UsulanKegiatan::class);
    // }
}
