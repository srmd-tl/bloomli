<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\QuizController;

Route::get('/', [QuizController::class,'clientIndex'])->name('client.quiz.all');
Route::get('/nfq', [QuizController::class,'nfq'])->name('client.quiz.nfqQuiz');
//Route::get('/{book}', [BookController::class,'show'])->name('book.show');
//Route::post('/', [BookController::class,'store'])->name('book.store');

