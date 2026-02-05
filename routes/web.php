<<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('layouts.dashboard');
});

Route::resource('user', UserController::class);
