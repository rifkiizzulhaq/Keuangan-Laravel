<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemimpin extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'bidang',
        'nip',
        'nidn',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    // public function admin()
    // {
    //     return $this->belongsTo(Admin::class);
    // }
}
