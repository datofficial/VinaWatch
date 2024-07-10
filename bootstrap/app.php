<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__ . '/../routes/web.php',
        commands: __DIR__ . '/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware){
        $middleWareAdmin = array(
            App\Http\Middleware\CheckLoginMiddleware::class,
            App\Http\Middleware\CheckLoginAdmin::class,
        );
        $middleware->group("admin", $middleWareAdmin);
    })
    ->withExceptions(function (Exceptions $exceptions){
        //
    })->create();
