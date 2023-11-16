<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KomponenProgram extends Model
{
    use HasFactory;
    protected $fillable = [
        'kategori_id',
        'parent_id',
        'kode',
        'uraian',
        // 'status',
    ];

    public function kategori()
    {
        return $this->belongsTo(Kategori::class);
    }
    public function parent(){
        return $this->belongsTo(KomponenProgram::class, 'parent_id');
    }
    public function children(){
        return $this->hasMany(KomponenProgram::class, 'parent_id');
    }
    public function satuan()
    {
        return $this->belongsTo(Satuan::class);
    }
}
