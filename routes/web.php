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

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');

// Player Routes
Route::get('/player/home', function () {
    return view('player.home');
})->name('player.home');

Route::get('/player/standings', function () {
    return view('player.standings');
})->name('player.standings');

Route::get('/player/team-details', function () {
    return view('player.team-details');
})->name('player.team-details');

Route::get('/player/matches', function () {
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

Route::get('/player/eligibility-status', function () {
    return view('player.eligibility-status');
})->name('player.eligibility-status');

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

Route::get('/manager/create-lineup', function () {
    return view('manager.create-lineup');
})->name('manager.create-lineup');

Route::get('/manager/edit-lineup', function () {
    return view('manager.edit-lineup');
})->name('manager.edit-lineup');

Route::get('/manager/team', function () {
    return view('manager.team');
})->name('manager.team');

Route::get('/manager/players-list', function () {
    return view('manager.players-list');
})->name('manager.players-list');

Route::get('/manager/matches-list', function () {
    return view('manager.matches-list');
})->name('manager.matches-list');

Route::get('/manager/standings', function () {
    return view('manager.standings');
})->name('manager.standings');

// Admin Routes
Route::get('/admin/dashboard', function () {
    return view('admin.home');
})->name('admin.dashboard');

Route::get('/admin/users', function () {
    return view('admin.users');
})->name('admin.users');

Route::get('/admin/teams', function () {
    return view('admin.teams');
})->name('admin.teams');

Route::get('/admin/matches', function () {
    return view('admin.matches');
})->name('admin.matches');

Route::get('/admin/academic', function () {
    return view('admin.academic');
})->name('admin.academic');

// Teacher Routes
Route::get('/teacher/dashboard', function () {
    return view('teacher.home');
})->name('teacher.dashboard');

Route::get('/teacher/academic-results', function () {
    return view('teacher.academic-results');
})->name('teacher.academic-results');

// Other Routes
Route::get('/note-found', function(){
    return view('note-found');
})->name('note-found');
