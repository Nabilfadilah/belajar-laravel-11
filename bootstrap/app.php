<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Http\Request;

// aplication builder
return Application::configure(basePath: dirname(__DIR__))
    // method withRouting
    ->withRouting(
        web: __DIR__ . '/../routes/web.php',
        commands: __DIR__ . '/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        //
    })
    ->withExceptions(function (Exceptions $exceptions) {
        // bisa tambah langsung report utnuk halaman nya disis
        $exceptions->dontReport(\App\Exceptions\ValidatorError::class);
        // bisa atur halaman/path yang beluom ada
        $exceptions->renderable(function (\App\Exceptions\ValidatorError $exceptions, Request $request) {
            return response("Bab Request", 400);
        });
    })->create();
