<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::post('/order', [OrderController::class, 'store'])->name('order.store');

Route::get('/thank-you', function () {
    return view('thank-you');
})->name('thank-you');