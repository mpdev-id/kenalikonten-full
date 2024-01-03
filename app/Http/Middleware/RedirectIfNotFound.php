<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RedirectIfNotFound
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
         $response = $next($request);

        // Cek jika respons adalah 404
        if ($response->getStatusCode() == Response::HTTP_NOT_FOUND) {
            return redirect()->route('index.home');
        }

        return $response;
    }
}
