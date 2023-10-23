<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\Pemimpin;
use App\Models\Unit;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
{
    User::create([
        'name' => 'Superadmin',
        'email' => 'Superadmin@polindra.ac.id',
        'email_verified_at' => Carbon::now(),
        'password' => bcrypt('123456789'),
        'role' => 'Superadmin',
    ]);

    $user = User::create([
        'name' => 'Admin',
        'email' => 'Admin@polindra.ac.id',
        'email_verified_at' => Carbon::now(),
        'password' => bcrypt('123456789'),
        'role' => 'Admin',
    ]);

    Admin::create([
        'user_id' => $user->id,
        'nip' => 123456789,
        'nidn' => 123456789,
    ]);

    $user = User::create([
        'name' => 'Pemimpin',
        'email' => 'Pemimpin@polindra.ac.id',
        'email_verified_at' => Carbon::now(),
        'password' => bcrypt('123456789'),
        'role' => 'Pemimpin',
    ]);

    Pemimpin::create([
        'user_id' => $user->id,
        'bidang' => 'Direktur',
        'nip' => 123456789,
        'nidn' => 123456789,
    ]);

    $user = User::create([
        'name' => 'Unit',
        'email' => 'Unit@polindra.ac.id',
        'email_verified_at' => Carbon::now(),
        'password' => bcrypt('123456789'),
        'role' => 'Unit',
    ]);

    Unit::create([
        'user_id' => $user->id,
        'bidang' => 'Bidang Akademik',
    ]);
}

}
