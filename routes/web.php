<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomePageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomePageController::class, 'index'])->name('home');
// Route::get('/', [ContactController::class, 'contact'])->name('contact-us');



