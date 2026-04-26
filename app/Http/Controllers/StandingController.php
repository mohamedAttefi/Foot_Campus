<?php

namespace App\Http\Controllers;

use App\Models\Standing;
use App\Http\Requests\StoreStandingRequest;
use App\Http\Requests\UpdateStandingRequest;
use Illuminate\Support\Facades\Auth;


class StandingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $standings = Standing::with('team')->orderBy('points', 'desc')->get();
        return response()->json($standings);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreStandingRequest $request)
    {
        $validated = $request->validated();
        $standing = Standing::create($validated);
        return response()->json($standing, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Standing $standing)
    {
        return response()->json($standing);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateStandingRequest $request, Standing $standing)
    {
        $validated = $request->validated();
        $standing->update($validated);
        return response()->json($standing);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Standing $standing)
    {
        $standing->delete();
        return response()->json(null, 204);
    }
}
