<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Http\Requests\StoreTeamRequest;
use App\Http\Requests\UpdateTeamRequest;
use Illuminate\Support\Facades\Auth;


class TeamController extends Controller
{

    public function index()
    {

        return response()->json(['teams' => Team::with('players')->get()]);
    }

    public function store(StoreTeamRequest $request)
    {
        if (!in_array(Auth::user()->role, ['admin', 'coach'])) {
            return response()->json(['message' => 'This action is unauthorized'], 403);
        }
        $validated = $request->validated();

        $team = Team::create($validated);

        return response()->json(['message' => 'Team created successfully!', 'team' => $team], 201);
    }

    public function show($id)
    {

        $team = Team::with('players')->findOrFail($id);
        return response()->json(['team' => $team]);
    }

    public function update(UpdateTeamRequest $request, $id)
    {
        if (!in_array(Auth::user()->role, ['admin', 'coach'])) {
            return response()->json(['message' => 'This action is unauthorized'], 403);
        }

        $team = Team::findOrFail($id);

        $validated = $request->validated();

        $team->update($validated);

        return response()->json(['message' => 'Team updated successfully!', 'team' => $team]);
    }

    public function destroy($id)
    {
        if (Auth::user()->role !== 'admin') {
            return response()->json(['message' => 'This action is unauthorized'], 403);
        }

        $team = Team::findOrFail($id);
        $team->delete();

        return response()->json(['message' => 'Team deleted successfully!']);
    }

    public function getEligiblePlayers($teamId)
    {
        if (!in_array(Auth::user()->role, ['admin', 'coach'])) {
            return response()->json(['message' => 'This action is unauthorized'], 403);
        }

        $team = Team::with('players')->findOrFail($teamId);
        $eligiblePlayers = $team->players->filter(function ($player) {
            return $player->checkEligibility();
        });

        return response()->json(['eligible_players' => $eligiblePlayers]);
    }
}
