<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Komponen extends Model
{
    use HasFactory;
    protected $fillable = [
        // 'admin_id',
        // 'usulan_kegiatan_id',
        'kode',
        'komponen',
    ];

    // public function admin()
    // {
    //     return $this->belongsTo(Admin::class);
    // }
    // public function usulan_kegiatan()
    // {
    //     return $this->belongsTo(UsulanKegiatan::class);
    // }
}
