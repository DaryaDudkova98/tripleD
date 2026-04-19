<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::view('/privacy', 'privacy');
Route::view('/portfolio', 'portfolio.index');