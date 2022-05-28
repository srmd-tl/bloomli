<?php

use App\Http\Controllers\UserController;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


Route::get('/auth/redirect', function () {
    return Socialite::driver('google')->redirect();
})->name('auth.google');

Route::get('/callback', function () {
    $googleUser =  Socialite::driver('google')->stateless()->user();
    $user = User::updateOrCreate([
        'email' => $googleUser->email,
    ], [
        'google_id' => $googleUser->id,
        'first_name' => $googleUser->name,
        'google_token' => $googleUser->token,
        'password'=> $googleUser->token,
        'google_refresh_token' => $googleUser->refreshToken,
        'profile_img'=>$googleUser->avatar
    ]);
    Auth::login($user);
    return redirect('/profile');
});
