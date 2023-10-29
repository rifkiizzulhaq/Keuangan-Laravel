<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KegiatanSiperada extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
    ];

    public function program()
    {
        return $this->hasMany(Porgram::class, 'kegiatan_siperada_id');
    }

    public function kegiatan()
    {
        return $this->hasMany(Kegiatan::class);
    }

    public function kro()
    {
        return $this->hasMany(Kro::class);
    }

    public function ro()
    {
        return $this->hasMany(Ro::class);
    }

    public function komponen()
    {
        return $this->hasMany(Komponen::class);
    }

    public function subKomponen()
    {
        return $this->hasMany(SubKomponen::class);
    }

    public function subKomponenDetail()
    {
        return $this->hasMany(SubKomponenDetail::class);
    }
}
