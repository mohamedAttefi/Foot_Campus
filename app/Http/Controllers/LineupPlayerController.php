<?php

namespace App\Http\Controllers;

use App\Models\LineupPlayer;
use App\Http\Requests\StoreLineupPlayerRequest;
use App\Http\Requests\UpdateLineupPlayerRequest;
use Illuminate\Support\Facades\Auth;


class LineupPlayerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $lineupPlayers = LineupPlayer::all();
        return response()->json($lineupPlayers);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreLineupPlayerRequest $request)
    {
        $validated = $request->validated();
        $lineupPlayer = LineupPlayer::create($validated);
        return response()->json($lineupPlayer, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(LineupPlayer $lineupPlayer)
    {
        return response()->json($lineupPlayer);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateLineupPlayerRequest $request, LineupPlayer $lineupPlayer)
    {
        $validated = $request->validated();
        $lineupPlayer->update($validated);
        return response()->json($lineupPlayer);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(LineupPlayer $lineupPlayer)
    {
        $lineupPlayer->delete();
        return response()->json(null, 204);
    }
}
