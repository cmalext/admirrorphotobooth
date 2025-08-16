<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MessageController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/gallery/wedding', function () {
    return view('gallery.wedding-gallery');
});

Route::get('/gallery/corporate', function () {
    return view('gallery.corporate-gallery');
});

Route::get('/gallery/birthday', function () {
    return view('gallery.birthday-gallery');
});

Route::post('/messages', [MessageController::class, 'store'])->name('messages.store');

Route::get('/demo', function () {
    return view('demo');
})->name('demo');


