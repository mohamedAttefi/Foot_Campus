<?php

namespace App\Http\Controllers;

use App\Models\MatchStat;
use App\Http\Requests\StoreMatchStatRequest;
use App\Http\Requests\UpdateMatchStatRequest;
use Illuminate\Support\Facades\Auth;


class MatchStatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $stats = MatchStat::all();
        return response()->json($stats);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMatchStatRequest $request)
    {
        $validated = $request->validated();
        $stat = MatchStat::create($validated);
        return response()->json($stat, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(MatchStat $matchStat)
    {
        return response()->json($matchStat);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMatchStatRequest $request, MatchStat $matchStat)
    {
        $validated = $request->validated();
        $matchStat->update($validated);
        return response()->json($matchStat);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MatchStat $matchStat)
    {
        $matchStat->delete();
        return response()->json(null, 204);
    }
}
