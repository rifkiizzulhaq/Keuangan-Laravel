<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsulanKegiatan extends Model
{
    use HasFactory;
    protected $fillable = [
        'unit_id',
        // 'kode',
        'tahun_anggaran',
        'kode',
        'rincian',
        'volume',
        'satuan',
        'harga_satuan',
        // 'jumlah'
    ];

    public function unit()
    {
        return $this->belongsTo(Unit::class);
    }
    public function admin()
    {
        return $this->belongsTo(Admin::class);
    }

    // public function kegiatan()
    // {
    //     return $this->hasMany(Kegiatan::class);
    // }
    // public function komponen()
    // {
    //     return $this->hasMany(Komponen::class);
    // }
    // public function ro()
    // {
    //     return $this->hasMany(Ro::class);
    // }
    // public function kro()
    // {
    //     return $this->hasMany(Kro::class);
    // }
    // public function porgram()
    // {
    //     return $this->hasMany(Porgram::class);
    // }
}
