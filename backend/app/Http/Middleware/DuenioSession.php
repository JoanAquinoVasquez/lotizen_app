<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class DuenioSession
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (empty(session('nombre'))) {
            // La variable 'nombre' está vacía, redirige al usuario al inicio de sesión o muestra un mensaje
            return redirect('/duenio/login')->with('message', 'Debe iniciar sesión para acceder a esta página.');
        }
        return $next($request);
    }
}
