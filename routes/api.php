<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/prueba/v2', function () {
    return response('<h1>Backend corriendo</h1>', 200)->header('Content-type', 'text/html');
});
