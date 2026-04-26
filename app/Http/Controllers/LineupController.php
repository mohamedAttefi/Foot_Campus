<?php

namespace App\Http\Controllers;

use App\Models\Lineup;
use App\Models\LineupPlayer;
use App\Http\Requests\StoreLineupRequest;
use App\Http\Requests\UpdateLineupRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LineupController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreLineupRequest $request)
    {
        $validated = $request->validated();

        $lineup = Lineup::create([
            'match_id' => $validated['match_id'],
            'validated_by_admin' => false,
        ]);

        foreach ($validated['starters'] as $playerId) {
            LineupPlayer::create([
                'lineup_id' => $lineup->id,
                'player_id' => $playerId,
                'is_starter' => true,
            ]);
        }

        foreach ($validated['substitutes'] as $playerId) {
            LineupPlayer::create([
                'lineup_id' => $lineup->id,
                'player_id' => $playerId,
                'is_starter' => false,
            ]);
        }

        return response()->json(['message' => 'Lineup saved successfully!', 'lineup' => $lineup->load('lineupPlayers.player')]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Lineup $lineup)
    {
        return response()->json($lineup->load('lineupPlayers.player'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateLineupRequest $request, Lineup $lineup)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Lineup $lineup)
    {
        //
    }

    public function validateLineup($lineupId)
    {
        $lineup = Lineup::findOrFail($lineupId);
        $lineup->validated_by_admin = true;
        $lineup->save();

        return response()->json(['message' => 'Lineup validated successfully!']);
    }
}
