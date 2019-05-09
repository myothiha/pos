<?php

namespace App\Http\Middleware;

use App\User;
use Auth;
use Closure;
use Illuminate\Http\Request;

class Processing
{
    /**
     * Handle an incoming request.
     *
     * @param  Request  $request
     * @param Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (Auth::user()->hasRole(User::ADMIN))
        {
            return $next($request);
        }

        if (Auth::user()->hasRole(User::PROCESSING))
        {
            return $next($request);
        }

        return abort(403, 'Access Denied');
    }
}
