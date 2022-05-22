<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['auth']], function () {
    Route::get('/profile', [UserController::class, 'profile'])->name('user.profile.show');
    Route::put('/update/{user}', [UserController::class, 'update'])->name('user.profile.update');

});

