<?php

namespace TrySpecter\Specter\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class SpecterAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @param  string|null $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if ( !Auth::guard($guard)->check() ) {
            return redirect()->route('specter.signin');
        }

        return $next($request);
    }
}
