<?php

use Illuminate\Support\Facades\Route;

// routing route
Route::get('/', function () {
    return view('welcome');
});
Route::get('/validation', function () {
    throw new \App\Exceptions\ValidatorError("Invalid input");
});
