<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckUserRole
{
    public function handle(Request $request, Closure $next, ...$roles)
    {
        $user = Auth::user();

        // Periksa apakah pengguna telah login
        if ($user) {
            // Periksa apakah peran pengguna ada dalam daftar yang diberikan
            if (in_array($user->role, $roles)) {
                return $next($request);
            }
        }

        // Jika peran pengguna tidak sesuai, lakukan redirect sesuai dengan peran
        if ($user && $user->role === 'Superadmin') {
            return redirect('/account-admin')->with('success', 'You are signed in!');
        } elseif ($user && $user->role === 'Admin') {
            return redirect('/table-program')->with('success', 'Your are signed in!');
        } elseif ($user && $user->role === 'Pemimpin') {
            return redirect('/dashboard')->with('success', 'Your are signed in!');
        } elseif ($user && $user->role === 'Unit') {
            return redirect('/usulan-kegiatan')->with('success', 'Your are signed in!');
        } else {
            // Redirect ke halaman default jika peran tidak cocok atau pengguna tidak masuk
            return redirect('/')
                ->withErrors([
                    'access' => 'You have no access to this resource'
                ]);
        }
    }
}
