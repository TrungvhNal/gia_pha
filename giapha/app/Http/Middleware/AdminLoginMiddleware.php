<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AdminLoginMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(Auth::Check())
        {
            $user = Auth::user();
            if($user->idRoles == 1)
            {
                return $next($request);
            }
            else
            {
                return view('home');
            }
        }
        else
        {
            Return view('login');
        }
    }
}
