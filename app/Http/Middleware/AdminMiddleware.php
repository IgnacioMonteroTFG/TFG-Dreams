<?php

namespace App\Http\Middleware;

use Closure;

class AdminMiddleware
{
    public function handle($request, Closure $next)
    {
        if ($request->user() && $request->user()->Rol !== 'Admin') {
            abort(403, 'No tienes permiso para acceder a esta página.');
        }

        return $next($request);
    }
}
