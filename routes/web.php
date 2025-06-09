<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GetStartedController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/services', function () {
    return view('services');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/get-started', [GetStartedController::class, 'index']);