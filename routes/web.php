<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\NoteController;

Auth::routes();

Route::middleware(['auth', 'verified'])->group(function () {
    Route::resource('note', NoteController::class);
});
