<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Http\Requests\StoreTeamRequest;
use App\Http\Requests\UpdateTeamRequest;

class TeamController extends Controller
{

    public function index()
    {
        return response()->json(['teams' => Team::with('players')->get()]);
    }

    public function store(StoreTeamRequest $request)
    {
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
        $team = Team::findOrFail($id);

        $validated = $request->validated();

        $team->update($validated);

        return response()->json(['message' => 'Team updated successfully!', 'team' => $team]);
    }

    public function destroy($id)
    {
        $team = Team::findOrFail($id);
        $team->delete();

        return response()->json(['message' => 'Team deleted successfully!']);
    }

    public function getEligiblePlayers($teamId)
    {
        $team = Team::findOrFail($teamId);
        $eligiblePlayers = $team->players()->where('is_eligible', true)->get();

        return response()->json(['eligible_players' => $eligiblePlayers]);
    }
}
