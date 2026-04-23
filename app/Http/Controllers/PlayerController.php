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
        return response()->json(Player::with('team')->get());
    }

    public function getPlayerByUserId($userId)
    {
        $player = Player::where('user_id', $userId)->with('team')->first();
        return response()->json($player);
    }

    public function store(StorePlayerRequest $request)
    {
        $validated = $request->validated();

        $player = Player::create($validated);

        return response()->json(['message' => 'Player created successfully!', 'player' => $player], 201);
    }

    public function show($id)
    {
        $player = Player::with('team')->findOrFail($id);
        return response()->json($player);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePlayerRequest $request, $id)
    {
        if (Auth::user()->role !== 'coach' || Auth::user()->role !== 'admin') {
            return response()->json(['message' => 'This action is unauthorized'], 401);
        }

        $player = Player::findOrFail($id);
        $validated = $request->validated();

        $player->update($validated);

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
        $player = Player::findOrFail($playerId);
        $team = Team::findOrFail($teamId);

        $player->team_id = $team->id;
        $player->save();

        return response()->json([
            'message' => 'Player assigned to team successfully!',
            'player' => $player,
            'team' => $team,
        ]);
    }
}
