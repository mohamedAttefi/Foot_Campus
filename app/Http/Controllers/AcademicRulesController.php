<?php

namespace App\Http\Controllers;

use App\Models\AcademicRules;
use App\Http\Requests\StoreAcademicRulesRequest;
use App\Http\Requests\UpdateAcademicRulesRequest;
use Illuminate\Support\Facades\Auth;


class AcademicRulesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (!in_array(Auth::user()->role, ['admin', 'teacher'])) {
            return response()->json(['message' => 'This action is unauthorized'], 403);
        }

        $rules = AcademicRules::all();
        return response()->json($rules);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAcademicRulesRequest $request)
    {
        if (Auth::user()->role !== 'admin') {
            return response()->json(['message' => 'This action is unauthorized'], 403);
        }

        $validated = $request->validated();
        $rule = AcademicRules::create($validated);
        return response()->json($rule, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(AcademicRules $academicRules)
    {
        if (!in_array(Auth::user()->role, ['admin', 'teacher'])) {
            return response()->json(['message' => 'This action is unauthorized'], 403);
        }

        return response()->json($academicRules);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAcademicRulesRequest $request, AcademicRules $academicRules)
    {
        if (Auth::user()->role !== 'admin') {
            return response()->json(['message' => 'This action is unauthorized'], 403);
        }

        $academicRules->update($request->validated());
        return response()->json($academicRules);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AcademicRules $academicRules)
    {
        if (Auth::user()->role !== 'admin') {
            return response()->json(['message' => 'This action is unauthorized'], 403);
        }

        $academicRules->delete();
        return response()->json(null, 204);
    }

    /**
     * Check player eligibility based on academic rules.
     */
    public function checkEligibility($playerId)
    {
        $playerRecords = AcademicRecords::where('player_id', $playerId)->get();
        $activeRule = AcademicRules::where('is_active', true)->first();

        if (!$activeRule) {
            return response()->json(['message' => 'No active academic rule found'], 404);
        }

        $average = $playerRecords->avg('average');
        $failedSubjects = $playerRecords->where('average', '<', 10)->count();

        $isEligible = $average >= $activeRule->min_average_threshold && $failedSubjects <= $activeRule->max_failed_subjects;

        return response()->json([
            'player_id' => $playerId,
            'is_eligible' => $isEligible,
            'average' => $average,
            'failed_subjects' => $failedSubjects,
        ]);
    }
}
