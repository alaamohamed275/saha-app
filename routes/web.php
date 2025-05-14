<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ActivityLogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ContactMessageController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\MissionController;
use App\Http\Controllers\HomeController;
Route::get('/', function () {
     return view('home');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/contact-info', [App\Http\Controllers\HomeController::class, 'contact'])->name('contact-info');
Route::get('/about', [App\Http\Controllers\HomeController::class, 'about'])->name('about');



// Language switcher
Route::get('language/{locale}', [LanguageController::class, 'switch'])->name('language.switch');



// Dashboard routes protected by auth middleware
Route::middleware(['auth', 'locale'])->group(function () {
    // Dashboard home
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    
    // Users management
    Route::resource('users', UserController::class);
    
    // Products management
    Route::resource('about-us', AboutUsController::class);
    Route::resource('contact', ContactController::class);
    Route::resource('missions', MissionController::class);

    Route::resource('services', ServiceController::class);
    Route::resource('messages', ContactMessageController::class);
    
    Route::get('profile', [ProfileController::class, 'show'])->name('profile.show');
    Route::put('profile', [ProfileController::class, 'update'])->name('profile.update');
    
    // Activity Logs
    Route::get('logs', [ActivityLogController::class, 'index'])->name('logs.index');
});