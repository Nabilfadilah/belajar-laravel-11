<?php

use Illuminate\Support\Facades\Route;

// routing route
Route::get('/', function () {
    return view('welcome');
});
