<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'bidang'
        // 'admin_id',
        // 'pemimpin_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    // public function admin()
    // {
    //     return $this->belongsTo(Admin::class);
    // }
    // public function pemimpin()
    // {
    //     return $this->belongsTo(Pemimpin::class);
    // }
}
