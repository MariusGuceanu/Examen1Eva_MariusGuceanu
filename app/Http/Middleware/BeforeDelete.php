<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Before
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $logMessage = "Eliminando manzana - ".now()."\n";
        file_put_contents(storage_path('logs/before_delete.log'), $logMessage, FILE_APPEND);

        return $next($request);
    }
}
