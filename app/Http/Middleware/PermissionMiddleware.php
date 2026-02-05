<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Http\Request;

class PermissionMiddleware
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next)
    {
        try {
            // jalankan request
            return $next($request);
        } catch (AuthorizationException $e) {
            // redirect back dengan flash message
            return redirect()->back()
                ->with('error', 'Anda tidak memiliki akses ke halaman ini.');
        }
    }
}
