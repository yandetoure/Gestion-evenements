<?php

use Illuminate\Foundation\Application;
use App\Http\Middleware\UserRoleMiddleware;
use App\Http\Middleware\AdminRoleMiddleware;
use App\Http\Middleware\AssociationRoleMiddleware;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->alias([
            'role.user' => UserRoleMiddleware::class,
            'role.association' => AssociationRoleMiddleware::class,
            'role.admin' => AdminRoleMiddleware::class,
        ]);
        //
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
 