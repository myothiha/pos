<?php

namespace App\Http\Middleware;

use App\User;
use Closure;

class Processing
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
        if (\Auth::user()->hasRole(User::ADMIN))
        {
            return $next($request);
        }

        if (\Auth::user()->hasRole(User::PROCESSING))
        {
            return $next($request);
        }

        return abort(403, 'Access Denied');
    }
}
