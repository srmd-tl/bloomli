<?php

use App\Http\Controllers\BookController;

Route::get('/', [BookController::class,'index'])->name('books.all');
Route::get('/{book}', [BookController::class,'show'])->name('book.show');
Route::post('/', [BookController::class,'store'])->name('book.store');

