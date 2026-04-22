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

Route::get('/player/standings', function () {
    return view('player.standings');
})->name('player.standings');

Route::get('/player/team-details', function () {
    return view('player.team-details');
})->name('player.team-details');

Route::get('/player/match-schedule', function () {
    return view('player.match-schedule');
})->name('player.match-schedule');

Route::get('/player/match-details', function () {
    return view('player.match-details');
})->name('player.match-details');

Route::get('/player/profile', function () {
    return view('player.profile');
})->name('player.profile');

Route::get('/player/academic-results', function () {
    return view('player.academic-results');
})->name('player.academic-results');

// Manager Routes
Route::get('/manager/dashboard', function () {
    return view('manager.home');
})->name('manager.dashboard');

Route::get('/manager/match-details', function () {
    return view('manager.match-details');
})->name('manager.match-details');

Route::get('/manager/team-management', function () {
    return view('manager.team-management');
})->name('manager.team-management');

Route::get('/manager/player-stats', function () {
    return view('manager.player-stats');
})->name('manager.player-stats');

Route::get('/manager/schedule', function () {
    return view('manager.schedule');
})->name('manager.schedule');

Route::get('/note-found', function(){
    return view('note-found');
})->name('note-found');