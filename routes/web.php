<?php

use App\Http\Controllers\ClientController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ClientController::class, 'home'])->name('home');
Route::get('/about', [ClientController::class, 'about'])->name('about');
Route::get('/blog', [ClientController::class, 'blog'])->name('blog');
Route::get('/resort', [ClientController::class, 'resort'])->name('resort');
Route::get('/resortReview', [ClientController::class, 'resortReview'])->name('resortReview');
Route::get('/restaurant', [ClientController::class, 'restaurant'])->name('restaurant');
Route::get('/contact', [ClientController::class, 'contact'])->name('contact');