<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     * Prendre en charge une requête entrante
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        //Si l'utilisateur est authentifié on le redirige par l'accueil
        if (Auth::guard($guard)->check()) {
            return redirect()->home();
        }

        // Sinon on laisse la requêtre suivre son cours normal
        return $next($request);
    }
}
