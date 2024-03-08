<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

use App\Http\Controllers\LogInController;
use App\Http\Controllers\JoinController;
use App\Models\User;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::middleware('auth')->group(function () {
    Route::get('/', function (User $user) {
        return Inertia::render('Login', [
            'user' => $user,
          ]);
    });
});

Route::middleware('guest')->group(function () {
    Route::controller(LogInController::class)->group(function () {
        Route::get('log-in', 'create')->name('log-in');
        Route::post('log-in', 'store');
    });
    Route::controller(JoinController::class)->group(function () {
        Route::get('join', 'create')->name('join');
        Route::post('join', 'store');
    });
});
