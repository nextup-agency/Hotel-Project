<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class UserAkses
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Memeriksa apakah pengguna sudah terautentikasi
        if (!Auth::check()) {
            // Jika belum terautentikasi, arahkan ke halaman login
            return redirect()->route('login');
        }

        // Jika sudah terautentikasi, lanjutkan permintaan
        return $next($request);
    }
}
