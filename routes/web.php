<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;



// Book routes
Route::get('/', [BookController::class, 'index'])->name('books.index');
Route::get('/{book}', [BookController::class, 'show'])->name('books.show');
