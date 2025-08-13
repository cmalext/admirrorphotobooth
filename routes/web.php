<?php

use Illuminate\Support\Facades\Route;

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


