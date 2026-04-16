<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\MatchEventController;
use App\Http\Controllers\Auth\AuthController;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});



Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');

Route::get('/player/home', function () {
    return view('player.home');
})->name('player.home');
