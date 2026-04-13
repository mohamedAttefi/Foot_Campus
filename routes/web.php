<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\MatchEventController;

Route::get('/', function () {
    return view('welcome');
});

// Public Consultation Routes
Route::get('/public/matches', [PublicController::class, 'matches']);
Route::get('/public/matches/{id}', [PublicController::class, 'matchDetails']);
Route::get('/public/standings', [PublicController::class, 'standings']);
Route::get('/public/player-statistics', [PublicController::class, 'playerStatistics']);
Route::get('/public/team-statistics', [PublicController::class, 'teamStatistics']);

Route::resource('match-events', MatchEventController::class);
