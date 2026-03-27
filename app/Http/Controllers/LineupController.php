<?php

namespace App\Http\Controllers;

use App\Models\Lineup;
use App\Http\Requests\StoreLineupRequest;
use App\Http\Requests\UpdateLineupRequest;
use Illuminate\Http\Request;

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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Lineup $lineup)
    {
        //
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

    public function getEligiblePlayers($teamId)
    {
        $team = Team::findOrFail($teamId);
        $eligiblePlayers = $team->players()->where('is_eligible', true)->get();

        return response()->json(['eligible_players' => $eligiblePlayers]);
    }

    public function storeLineup(Request $request)
    {
        $validated = $request->validate([
            'match_id' => 'required|exists:game_plays,id',
            'team_id' => 'required|exists:teams,id',
            'starters' => 'required|array',
            'substitutes' => 'required|array',
        ]);

        foreach ($validated['starters'] as $playerId) {
            LineupPlayer::create([
                'lineup_id' => $validated['match_id'],
                'player_id' => $playerId,
                'is_starter' => true,
            ]);
        }

        foreach ($validated['substitutes'] as $playerId) {
            LineupPlayer::create([
                'lineup_id' => $validated['match_id'],
                'player_id' => $playerId,
                'is_starter' => false,
            ]);
        }

        return response()->json(['message' => 'Lineup saved successfully!']);
    }

    public function validateLineup($lineupId)
    {
        $lineup = Lineup::findOrFail($lineupId);
        $lineup->validated_by_admin = true;
        $lineup->save();

        return response()->json(['message' => 'Lineup validated successfully!']);
    }

    public function assignPlayerToTeam($playerId, $teamId)
    {
        $player = Player::findOrFail($playerId);
        $team = Team::findOrFail($teamId);

        $player->team_id = $team->id;
        $player->save();

        return response()->json(['message' => 'Player assigned to team successfully!', 'player' => $player]);
    }
}
