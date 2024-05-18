<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\NoteController;

Route::get('/', [WelcomeController::class, 'welcome'])->name('welcome');

Auth::routes();

Route::middleware(['auth', 'verified'])->group(function () {
    Route::resource('note', NoteController::class);
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
