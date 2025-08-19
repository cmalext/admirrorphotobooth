<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\PinController;

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

// Admin auth & dashboard
Route::get('/admin/login', [AdminAuthController::class, 'showLogin'])->name('admin.login');
Route::post('/admin/login', [AdminAuthController::class, 'login'])->name('admin.login.submit');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [AdminAuthController::class, 'dashboard'])->name('admin.dashboard');
    Route::post('/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');

    // Pins
    Route::post('/pins', [PinController::class, 'store'])->name('pins.store');
    Route::delete('/pins/{pin}', [PinController::class, 'destroy'])->name('pins.destroy');
});



