<?php

namespace App\Http\Controllers;

use App\Models\GamePlay;
use App\Http\Requests\StoreGamePlayRequest;
use App\Http\Requests\UpdateGamePlayRequest;
use Illuminate\Support\Facades\Auth;


class GamePlayController extends Controller
{
    /**
     * Unauthorized message constant.
     */
    private const UNAUTHORIZED_MESSAGE = 'This is unauthorized';

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $matches = GamePlay::all();
        return response()->json($matches);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreGamePlayRequest $request)
    {
        $validated = $request->validated();
        $match = GamePlay::create($validated);
        return response()->json($match, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(GamePlay $gamePlay)
    {
        if (!in_array(Auth::user()->role, ['admin', 'coach', 'teacher'])) {
            return response()->json([self::UNAUTHORIZED_MESSAGE], 403);
        }

        return response()->json($gamePlay);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateGamePlayRequest $request, GamePlay $gamePlay)
    {
        if (!in_array(Auth::user()->role, ['admin', 'coach'])) {
            return response()->json([self::UNAUTHORIZED_MESSAGE], 403);
        }

        $validated = $request->validated();
        $gamePlay->update($validated);
        return response()->json($gamePlay);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(GamePlay $gamePlay)
    {
        if (!in_array(Auth::user()->role, ['admin', 'coach'])) {
            return response()->json([self::UNAUTHORIZED_MESSAGE], 403);
        }

        $gamePlay->delete();
        return response()->json(null, 204);
    }
}
