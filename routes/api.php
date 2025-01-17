<?php

use Illuminate\Support\Facades\Route;
use aconvertini\Greetr\Http\Controllers\GreetController;

Route::middleware(['greetMiddleware'])
    ->namespace('aconvertini\Greetr\Http\Controllers')
    ->prefix('greet')
    ->group(function() {
        Route::get('/', [GreetController::class, 'index']);
    });