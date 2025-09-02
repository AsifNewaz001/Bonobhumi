<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/thank-you', function () {
    return view('thank-you');
})->name('thank-you');