<?php

namespace App\Http\Controllers;

use App\Models\GamePlay;
use App\Models\Standing;
use App\Models\Player;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    /**
     * Display a listing of all matches.
     */
    public function matches()
    {
        $matches = GamePlay::with(['teams', 'events'])->get();
        return response()->json($matches);
    }

    /**
     * Display the details of a specific match.
     */
    public function matchDetails($id)
    {
        $match = GamePlay::with(['teams', 'events'])->findOrFail($id);
        return response()->json($match);
    }

    /**
     * Display the team standings.
     */
    public function standings()
    {
        $standings = Standing::orderBy('points', 'desc')->get();
        return response()->json($standings);
    }

    /**
     * Display player statistics.
     */
    public function playerStatistics()
    {
        $players = Player::with(['team'])->orderBy('goals', 'desc')->get();
        return response()->json($players);
    }

    /**
     * Display team statistics.
     */
    public function teamStatistics()
    {
        $teams = Standing::with(['team'])->orderBy('points', 'desc')->get();
        return response()->json($teams);
    }
}