<?php

namespace App\Http\Middleware;

use Closure;

class AuthDashboard
{
    public function handle($request, Closure $next)
    {
        if ($request->session()->has('id')) {
            return redirect()->route('dashboard');
        }


        return $next($request);
    }
}