<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\MatchEventController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\ApprovalController;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});

// General standings route - simple view that handles frontend auth
Route::get('/standings', function () {
    return view('standings');
})->name('standings');

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');

// Player Routes
Route::get('/player/home', function () {
    return view('player.home');
})->middleware('role:player')->name('player.home');

Route::get('/player/standings', function () {
    return view('player.standings');
})->middleware('role:player')->name('player.standings');

Route::get('/player/team-details', function () {
    return view('player.team-details');
})->middleware('role:player')->name('player.team-details');

Route::get('/player/matches', function () {
    return view('player.match-schedule');
})->middleware('role:player')->name('player.match-schedule');

Route::get('/player/match-details', [MatchEventController::class, 'showMatchDetails'])
    ->middleware('role:player')
    ->name('player.match-details');

Route::get('/player/profile', function () {
    return view('player.profile');
})->middleware('role:player')->name('player.profile');

Route::get('/player/academic-results', function () {
    return view('player.academic-results');
})->middleware('role:player')->name('player.academic-results');

Route::get('/player/eligibility-status', function () {
    return view('player.eligibility-status');
})->middleware('role:player')->name('player.eligibility-status');

// Manager Routes
Route::get('/manager/dashboard', function () {
    return view('manager.home');
})->middleware('role:coach')->name('manager.dashboard');

Route::get('/manager/match-details', function () {
    return view('manager.match-details');
})->middleware('role:coach')->name('manager.match-details');

Route::get('/manager/team-management', function () {
    return view('manager.team-management');
})->middleware('role:coach')->name('manager.team-management');

Route::get('/manager/player-stats', function () {
    return view('manager.player-stats');
})->middleware('role:coach')->name('manager.player-stats');

Route::get('/manager/team', function () {
    return view('manager.team');
})->middleware('role:coach')->name('manager.team');

Route::get('/manager/match-details', function () {
    return view('manager.match-details');
})->middleware('role:coach')->name('manager.match-details');

Route::get('/manager/schedule', function () {
    return view('manager.schedule');
})->middleware('role:coach')->name('manager.schedule');

Route::get('/manager/create-lineup', function () {
    return view('manager.create-lineup');
})->middleware('role:coach')->name('manager.create-lineup');

Route::get('/manager/edit-lineup', function () {
    return view('manager.edit-lineup');
})->middleware('role:coach')->name('manager.edit-lineup');

Route::get('/manager/team', function () {
    return view('manager.team');
})->middleware('role:coach')->name('manager.team');

Route::get('/manager/players-list', function () {
    return view('manager.players-list');
})->middleware('role:coach')->name('manager.players-list');

Route::get('/manager/matches-list', function () {
    return view('manager.matches-list');
})->middleware('role:coach')->name('manager.matches-list');

Route::get('/manager/standings', function () {
    return view('manager.standings');
})->middleware('role:coach')->name('manager.standings');

// Admin Routes
Route::get('/admin/dashboard', function () {
    return view('admin.home');
})->middleware('role:admin')->name('admin.dashboard');

Route::get('/admin/users', function () {
    return view('admin.users');
})->middleware('role:admin')->name('admin.users');

Route::get('/admin/teams', function () {
    return view('admin.teams');
})->middleware('role:admin')->name('admin.teams');

Route::get('/admin/matches', function () {
    return view('admin.matches');
})->middleware('role:admin')->name('admin.matches');

Route::get('/admin/academic', function () {
    return view('admin.academic');
})->middleware('role:admin')->name('admin.academic');

Route::get('/admin/standings', function () {
    return view('admin.standings');
})->middleware('role:admin')->name('admin.standings');

// Teacher Routes
Route::get('/teacher/dashboard', function () {
    return view('teacher.home');
})->middleware('role:teacher')->name('teacher.dashboard');

Route::get('/teacher/academic-results', function () {
    return view('teacher.academic-results');
})->middleware('role:teacher')->name('teacher.academic-results');

// Other Routes
Route::get('/note-found', function(){
    return view('note-found');
})->name('note-found');
