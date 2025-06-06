<?php

namespace App\Http\Middleware\Role;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Periksa apakah pengguna sudah login
        if (!Auth::check()) {
            // Jika pengguna belum login, arahkan ke halaman login dengan pesan error
            return redirect()->route('login')->with('error', 'Anda harus login terlebih dahulu.');
        }

        // Periksa apakah pengguna memiliki peran 'admin'
        if (Auth::user()->level === 'Admin') {
            // Jika peran admin, lanjutkan request
            return $next($request);
        }

        // Jika pengguna tidak memiliki peran admin, arahkan ke halaman beranda
        abort(403, 'Maaf, Anda bukan admin.');
    }
}
