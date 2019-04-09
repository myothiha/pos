<?php

namespace App\Http\Middleware;

use App\User;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  Request $request
     * @param Closure $next
     * @param $roles
     * @return mixed
     */
    public function handle($request, Closure $next, $roles = null)
    {

        $user = Auth::user();

        return $next($request); // todo remove after authentication

        if($roles)
        {
            if ($user->isAdmin())
                return $next($request);

            foreach ($roles as $role) {
                if ($user->hasRole($role))
                    return $next($request);
            }
        }

        return redirect()->route('login');
    }
}
