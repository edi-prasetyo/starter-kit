<?php

use App\Http\Middleware\PermissionMiddleware;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Http\Request;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__ . '/../routes/web.php',
        commands: __DIR__ . '/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {
        $middleware->alias([
            'permissions' => PermissionMiddleware::class,
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        $exceptions->render(function (AuthorizationException $e, Request $request) {
            // Web (HTML) requests
            if ($request->acceptsHtml()) {
                return redirect()->back()
                    ->with('error', 'Anda tidak memiliki akses untuk melakukan aksi ini.');
            }

            // API requests
            return response()->json([
                'message' => 'Anda tidak memiliki akses untuk melakukan aksi ini.'
            ], 403);
        });
    })->create();
