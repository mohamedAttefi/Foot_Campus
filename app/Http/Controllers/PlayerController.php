<?php

namespace App\Http\Controllers;

use App\Models\Player;
use App\Http\Requests\StorePlayerRequest;
use App\Http\Requests\UpdatePlayerRequest;
use Illuminate\Http\Request;
use App\Models\Team;
use Illuminate\Support\Facades\Auth;


class PlayerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $players = Player::with(['team', 'user', 'grades'])->get();
        return response()->json($players);
    }

    public function getPlayerByUserId($userId)
    {
        $player = Player::where('user_id', $userId)->with(['team', 'user', 'grades'])->first();
        return response()->json($player);
    }

    public function store(StorePlayerRequest $request)
    {
        $validated = $request->validated();

        $player = Player::create($validated);
        $player->load(['team', 'user', 'grades']);

        return response()->json(['message' => 'Player created successfully!', 'player' => $player], 201);
    }

    public function show($id)
    {
        $player = Player::with(['team', 'user', 'grades'])->findOrFail($id);
        return response()->json($player);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePlayerRequest $request, $id)
    {
        if (!in_array(Auth::user()->role, ['coach', 'admin'])) {
            return response()->json(['message' => 'This action is unauthorized'], 403);
        }

        $player = Player::findOrFail($id);
        $validated = $request->validated();

        $player->update($validated);
        $player->load(['team', 'user', 'grades']);

        return response()->json(['message' => 'Player updated successfully!', 'player' => $player]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        if (Auth::user()->role !== 'admin') {
            return response()->json(['message' => 'This action is unauthorized'], 401);
        }
        $player = Player::findOrFail($id);
        $player->delete();

        return response()->json(['message' => 'Player deleted successfully!']);
    }

    public function assignToTeam($playerId, $teamId)
    {
        if (!in_array(Auth::user()->role, ['coach', 'admin'])) {
            return response()->json(['message' => 'This action is unauthorized'], 403);
        }

        $player = Player::findOrFail($playerId);
        $team = Team::findOrFail($teamId);

        $player->team_id = $team->id;
        $player->save();
        $player->load(['team', 'user']);

        return response()->json([
            'message' => 'Player assigned to team successfully!',
            'player' => $player,
            'team' => $team,
        ]);
    }

    /**
     * Get players by team ID
     */
    public function getPlayersByTeam($teamId)
    {
        $players = Player::where('team_id', $teamId)
            ->with(['user', 'grades'])
            ->get();
        
        return response()->json($players);
    }

    /**
     * Get player eligibility status
     */
    public function getEligibilityStatus($playerId)
    {
        $player = Player::findOrFail($playerId);
        $eligibility = $player->checkEligibility();
        
        return response()->json([
            'player_id' => $playerId,
            'is_eligible' => $eligibility,
            'average_grade' => $player->calculateAverage(),
                        'grades' => $player->grades
        ]);
    }

    /**
     * Update player eligibility status
     */
    public function updateEligibilityStatus($playerId)
    {
        if (!in_array(Auth::user()->role, ['admin', 'teacher'])) {
            return response()->json(['message' => 'This action is unauthorized'], 403);
        }

        $player = Player::findOrFail($playerId);
        $player->updateStatus();
        
        return response()->json([
            'message' => 'Player eligibility status updated successfully!',
            'player' => $player->load(['user', 'team'])
        ]);
    }

    /**
     * Get player statistics
     */
    public function getPlayerStats($playerId)
    {
        $player = Player::findOrFail($playerId);
        
        $stats = [
            'player' => $player->load(['user', 'team']),
            'match_events' => $player->events()->with('match')->get(),
            'lineups' => $player->lineups()->with('match')->get(),
            'academic_average' => $player->calculateAverage(),
            'eligibility_status' => $player->is_eligible
        ];
        
        return response()->json($stats);
    }

    /**
     * Get available players for lineup selection
     */
    public function getAvailablePlayers($teamId = null)
    {
        $query = Player::with(['user', 'team'])
            ->where('is_eligible', true);
            
        if ($teamId) {
            $query->where('team_id', $teamId);
        }
        
        $players = $query->get();
        
        return response()->json($players);
    }
}
