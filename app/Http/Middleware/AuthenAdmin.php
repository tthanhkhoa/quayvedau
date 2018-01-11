<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class AuthenAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next,$guard = 'admin')
    {
        if (Auth::guard($guard)->check()) {
            $admin = Auth::guard($guard)->user();
            view()->share('admin', $admin);
            return $next($request);
        }
        return redirect()->route('login');
    }
}
