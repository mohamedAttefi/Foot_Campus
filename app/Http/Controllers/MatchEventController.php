<?php

namespace App\Http\Controllers;

use App\Models\MatchEvent;
use App\Http\Requests\StoreMatchEventRequest;
use App\Http\Requests\UpdateMatchEventRequest;
use Illuminate\Support\Facades\Auth;


class MatchEventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $query = MatchEvent::with(['match', 'player.user', 'team']);
        
        if (request()->has('game_play_id')) {
            $query->where('game_play_id', request()->game_play_id);
        }
        
        if (request()->has('player_id')) {
            $query->where('player_id', request()->player_id);
        }
        
        $events = $query->orderBy('minute', 'asc')->get();
        return response()->json($events);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMatchEventRequest $request)
    {
        $validated = $request->validated();
        $event = MatchEvent::create($validated);
        return response()->json($event, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(MatchEvent $matchEvent)
    {
        return response()->json($matchEvent);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMatchEventRequest $request, MatchEvent $matchEvent)
    {
        $validated = $request->validated();
        $matchEvent->update($validated);
        return response()->json($matchEvent);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MatchEvent $matchEvent)
    {
        $matchEvent->delete();
        return response()->json(null, 204);
    }
}
