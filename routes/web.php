<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;


Route::get('/', function () {
    return view('welcome to Befree 9867 123');
});

Route::get('/welcome', [WelcomeController::class, 'index']);
