<?php

namespace App\Http\Controllers;

use App\Models\Grade;
use App\Models\Player;
use App\Http\Requests\StoreGradeRequest;
use Illuminate\Http\Request;
use App\Models\AcademicRules;

class GradeController extends Controller
{
    public function index()
    {
        $grades = Grade::with(['player', 'subject'])->get();
        return response()->json(['grades' => $grades]);
    }

    public function store(StoreGradeRequest $request)
    {
        $validated = $request->validated();

        $grade = Grade::create($validated);

        $player = Player::find($validated['player_id']);
        $eligibilityRule = AcademicRules::firstOrFail();
        $player->updateStatus($eligibilityRule);

        return response()->json(['message' => 'Grade added successfully!', 'grade' => $grade]);
    }

    public function destroy($id)
    {
        $grade = Grade::findOrFail($id);
        $grade->delete();

        $player = Player::find($grade->player_id);
        $eligibilityRule = AcademicRules::firstOrFail()->only(['min_average', 'min_score', 'max_failures']);
        $player->updateStatus($eligibilityRule);

        return response()->json(['message' => 'Grade deleted successfully!']);
    }
}
