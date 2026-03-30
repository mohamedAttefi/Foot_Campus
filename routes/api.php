<?php

use Illuminate\Http\Request;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\GradeController;
use App\Http\Controllers\PlayerController;
use App\Http\Controllers\LineupController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\SubjectController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout']);

Route::middleware('auth:sanctum')->group(function(){


    Route::apiResource('grade', GradeController::class)->only('index', 'store', 'destroy');


    Route::apiResource('player', PlayerController::class);
    Route::post('/player/{playerId}/assign-player-to-team/{teamId}', [PlayerController::class, 'assignToTeam']);


    Route::apiResource('lineup', lineupController::class)->only('store', 'update', 'show');
    Route::post('lineup/{id}', [LineupController::class, 'validateLineup']);


    Route::apiResource('team', TeamController::class);
    Route::get('/team/{id}/eligible-players', [TeamController::class, 'getEligiblePlayers']);


    Route::apiResource('subject', SubjectController::class)->only('index', 'store', 'destroy');



});
