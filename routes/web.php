<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

// Home route
Route::get('/', function () {
    return view('welcome');
});

// Book routes
Route::get('/books', [BookController::class, 'index'])->name('books.index');
Route::get('/books/{book}', [BookController::class, 'show'])->name('books.show');
