<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return 'Hello, Laravel!';
});

Route::get('/greet', [App\Http\Controllers\GreetController::class, 'show']);