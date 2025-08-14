<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MessageController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/wedding-gallery', function () {
    return view('wedding-gallery');
});

Route::get('/corporate-gallery', function () {
    return view('corporate-gallery');
});

Route::get('/birthday-gallery', function () {
    return view('birthday-gallery');
});

Route::post('/messages', [MessageController::class, 'store'])->name('messages.store');


