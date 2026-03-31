<?php

namespace App\Http\Controllers;

use App\Models\GamePlay;
use App\Http\Requests\StoreGamePlayRequest;
use App\Http\Requests\UpdateGamePlayRequest;

class GamePlayController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (!in_array(Auth::user()->role, ['admin', 'coach', 'teacher'])) {
            return response()->json(['message' => 'This action is unauthorized'], 403);
        }

        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreGamePlayRequest $request)
    {
        if (!in_array(Auth::user()->role, ['admin', 'coach'])) {
            return response()->json(['message' => 'This action is unauthorized'], 403);
        }

        //
    }

    /**
     * Display the specified resource.
     */
    public function show(GamePlay $gamePlay)
    {
        if (!in_array(Auth::user()->role, ['admin', 'coach', 'teacher'])) {
            return response()->json(['message' => 'This action is unauthorized'], 403);
        }

        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateGamePlayRequest $request, GamePlay $gamePlay)
    {
        if (!in_array(Auth::user()->role, ['admin', 'coach'])) {
            return response()->json(['message' => 'This action is unauthorized'], 403);
        }

        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(GamePlay $gamePlay)
    {
        if (!in_array(Auth::user()->role, ['admin', 'coach'])) {
            return response()->json(['message' => 'This action is unauthorized'], 403);
        }

        //
    }
}
