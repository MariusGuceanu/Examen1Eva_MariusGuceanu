<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class After
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $response = $next($request);

        $logMessage = "Manzana eliminada - " . now() . "\n";
        file_put_contents(storage_path('logs/after_manzana.log'), $logMessage, FILE_APPEND);

        return $response;
    }
}