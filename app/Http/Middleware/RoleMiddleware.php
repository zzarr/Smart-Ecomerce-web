<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string[]  ...$roles
     * @return mixed
     */
    public function handle($request, Closure $next, ...$roles)
    {
        // Cek apakah user sudah login
        if (!Auth::check()) {
            return redirect('/login');
        }

        // Dapatkan user yang sedang login
        $user = Auth::user();

        // Cek apakah user memiliki salah satu role yang diizinkan
        if (!in_array($user->role, $roles)) {
            // Jika user tidak memiliki akses, arahkan ke halaman yang diinginkan (misalnya home)
            return redirect('/home');
        }

        return $next($request);
    }
}