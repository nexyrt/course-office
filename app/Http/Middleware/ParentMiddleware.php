<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class ParentMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (!Auth::check()) {
            return redirect('/login');  // Jika pengguna tidak login, arahkan ke login
        }
    
        if (Auth::user()->role !== 'parent') {
            return redirect('/');  // Jika pengguna bukan admin, arahkan ke halaman utama
        }

        return $next($request);
    }
}
