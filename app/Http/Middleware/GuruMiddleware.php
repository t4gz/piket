<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class GuruMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if (auth()->check()) {
            $cek_role = auth()->user()->roles->role == "guru";
            if (auth()->check() && $cek_role) {
                return $next($request);
            } else {
                return redirect()->back();
            }
        } else {
            return redirect('/');
        }
    }
}
