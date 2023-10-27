<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'unit_id',
        'nip',
        'nidn',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function unit(){
        return $this->belongsTo(Unit::class);
    }
    public function usulan_kegiatans()
    {
        return $this->hasMany(UsulanKegiatan::class);
    }
    // public function pemimpin()
    // {
    //     return $this->belongsTo(Pemimpin::class);
    // }
}
