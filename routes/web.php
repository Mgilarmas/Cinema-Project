<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\CinemaController;

Route::resource('cinemas', CinemaController::class);