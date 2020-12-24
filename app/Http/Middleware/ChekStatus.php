<?php

namespace App\Http\Middleware;

use Auth;
use Closure;
use Fideloper\Proxy\TrustProxies as Middleware;

class ChekStatus
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
        if (Auth::user() && Auth::user()->isAdministrator()){
            return $next($request);
        } else {
            return redirect('/');
        }
    }
}
