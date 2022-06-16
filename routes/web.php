<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\PayPalController;
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


// Route::get('/dashboard', function () {
//     return view('dashboard.dashboard', ['title' => 'My Dashboard']);
// })->name('dashboard');
// ->middleware(['auth'])->name('dashboard');


Route::group(['prefix' => '/dashboard'], function () {
    Route::get('/', fn () => view('dashboard.dashboard', ['title' => 'My Dashboard']))->name('dashboard');
    Route::get('/tasks', fn () => view('dashboard.tasks', ['title' => 'Tasks']))->name('tasks');
    Route::get('/projects', fn () => view('dashboard.projects', ['title' => 'Projects']))->name('projects');
    Route::get('/team', fn () => view('dashboard.team', ['title' => 'Team']))->name('team');
//    Route::get('/books', fn () => view('dashboard.books', ['title' => 'Books']))->name('books');
    Route::get('/quiz', fn () => view('dashboard.quiz', ['title' => 'My Quizzes',

        'data' => array('a' => 'a', 'b' => 'b','c' => 'c')
]))->name('quiz');
    Route::get('/notes', fn () => view('dashboard.my_notes', ['title' => 'My Notes']))->name('notes');
    Route::get('/library', fn () => view('dashboard.library', ['title' => 'My Library']))->name('library');
    Route::get('/messages', fn () => view('dashboard.messages', ['title' => 'Messages']))->name('messages');
    Route::get('/account_info', fn () => view('dashboard.account_info', ['title' => 'Account Info']))->name('account_info');
    Route::get('/shit', fn () => view('dashboard.product' ))->name('product');
});


Route::post('/createQuiz', [QuizController::class, 'create'])->name('createQuiz');


Route::post('handle_payment', [PayPalController::class, 'handle'])->name('make.payment');
Route::get('cancel_payment', [PayPalController::class, 'cancel'])->name('cancel.payment');
Route::get('success_payment',[PayPalController::class, 'success'])->name('success.payment');



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
