<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectBasedOnRole
{
    public function handle($request, Closure $next)
    {
        // Periksa apakah pengguna telah login
        if (Auth::check()) {
            // Ambil peran pengguna
            $userRole = Auth::user()->role;

            // Redirect berdasarkan peran pengguna
            switch ($userRole) {
                case 'Admin':
                    return redirect('/admin/dashboard');
                case 'Pemimpin':
                    return redirect('/leader/dashboard');
                default:
                    return redirect('/');
            }
        }

        return $next($request);
    }
}
