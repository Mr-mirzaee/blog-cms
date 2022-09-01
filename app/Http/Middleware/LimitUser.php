<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LimitUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (auth()->check()) {
            if(auth()->user()->mobile == 'demo' && $request->route()->getName() != 'logout' && request()->method() != "GET" && request()->method() != "HEAD") {
                abort(403, 'Demo User Restricted');
            }
        }
        return $next($request);
    }
}
