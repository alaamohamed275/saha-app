<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/contact', [App\Http\Controllers\HomeController::class, 'contact'])->name('contact');
Route::get('/about', function () {
    return view('about');
})->name('about');

Route::resource('about-us', AboutUsController::class);
Route::resource('services', ServiceController::class);
Route::resource('contact-info', ContactInfoController::class);
Route::resource('contact-messages', ContactMessageController::class);