<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class RedirectIfNotAnggota
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next, $guard="anggota")
    {
        if(!auth()->guard($guard)->check()) {
            return redirect(route('login-anggotas'));
        }
        return $next($request);
    }
}
