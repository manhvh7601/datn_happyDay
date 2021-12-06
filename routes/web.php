<?php

use App\Http\Controllers\ClientController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ClientController::class, 'home'])->name('home');
Route::get('/about', [ClientController::class, 'about'])->name('about');
Route::get('/blog', [ClientController::class, 'blog'])->name('blog');
Route::get('/room', [ClientController::class, 'room'])->name('room');
Route::get('/roomSingle', [ClientController::class, 'roomSingle'])->name('roomSingle');
Route::get('/restaurant', [ClientController::class, 'restaurant'])->name('restaurant');
Route::get('/contact', [ClientController::class, 'contact'])->name('contact');