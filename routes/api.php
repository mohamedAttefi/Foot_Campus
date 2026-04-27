<?php

use Illuminate\Http\Request;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\GradeController;
use App\Http\Controllers\PlayerController;
use App\Http\Controllers\LineupController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\MatchEventController;
use App\Http\Controllers\AcademicRulesController;
use App\Http\Controllers\GamePlayController;
use App\Http\Controllers\MatchController;
use App\Http\Controllers\ApprovalController;
use App\Http\Controllers\StandingController;
use App\Http\Controllers\MatchStatController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LineupPlayerController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout']);


Route::middleware('auth:sanctum')->group(function () {
    Route::apiResource('grade', GradeController::class)->only('index', 'store', 'destroy');
    Route::apiResource('player', PlayerController::class);
    Route::get('players/{userId}', [PlayerController::class, 'getPlayerByUserId']);
    Route::post('/player/{playerId}/assign-player-to-team/{teamId}', [PlayerController::class, 'assignToTeam']);
    Route::get('/players/team/{teamId}', [PlayerController::class, 'getPlayersByTeam']);
    Route::get('/players/{playerId}/eligibility', [PlayerController::class, 'getEligibilityStatus']);
    Route::put('/players/{playerId}/eligibility', [PlayerController::class, 'updateEligibilityStatus']);
    Route::get('/players/{playerId}/stats', [PlayerController::class, 'getPlayerStats']);
    Route::get('/players/available/{teamId?}', [PlayerController::class, 'getAvailablePlayers']);
    Route::apiResource('lineup', LineupController::class);
    Route::post('lineup/{id}', [LineupController::class, 'validateLineup']);
    Route::apiResource('team', TeamController::class);
    Route::get('/team/{id}/eligible-players', [TeamController::class, 'getEligiblePlayers']);
    Route::apiResource('subject', SubjectController::class)->only('index', 'store', 'destroy');
    Route::apiResource('academic-rules', AcademicRulesController::class);

    Route::apiResource('matches', GamePlayController::class);

    Route::apiResource('users', UserController::class);
    Route::get('current-user', [UserController::class, 'me']);

    // Approval routes
    Route::get('/approval/pending-users', [ApprovalController::class, 'getPendingUsers']);
    Route::post('/approval/approve-user', [ApprovalController::class, 'approveUser']);
    Route::get('/approval/all-users-status', [ApprovalController::class, 'getAllUsersStatus']);


    Route::apiResource('match-events', MatchEventController::class);

    Route::apiResource('standings', StandingController::class);

    Route::apiResource('match-stats', MatchStatController::class);

    Route::apiResource('lineup-players', LineupPlayerController::class);

    Route::middleware(['auth:sanctum', 'can:manage-users'])->group(function () {
        Route::get('/users', [AuthController::class, 'manageUsers']);
    });

    Route::get('/players/{playerId}/eligibility', [AcademicRulesController::class, 'checkEligibility']);
});




