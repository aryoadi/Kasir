<?php

namespace App\Http\Middleware;

use Closure;

use Illuminate\Support\Facades\Auth;

class isAdmin
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
        if (Auth::check() && Auth::user()->id_level == 1) {
            return redirect()->route('kasir');
        }
        elseif (Auth::check() && Auth::user()->id_level == 2) {
            return $next($request); 
        }
        elseif (Auth::check() && Auth::user()->id_level == 3) {
            return redirect()->route('owner');
        }
        elseif (Auth::check() && Auth::user()->id_level == 4) {
            return redirect()->route('waiter');
        }
        else{
            return redirect()->route('login');
        }
    }
}
