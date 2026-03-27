<?php

namespace App\Http\Controllers;

use App\Models\Grade;
use App\Models\Player;
use Illuminate\Http\Request;

class GradeController extends Controller
{
    public function index()
    {
        return response()->json(['grades' => Grade::all()]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'player_id' => 'required|exists:players,id',
            'subject_id' => 'required|exists:subjects,id',
            'score' => 'required|numeric|min:0|max:100',
            'term_name' => 'required|string',
        ]);

        $grade = Grade::create($validated);

        $player = Player::find($validated['player_id']);
        $eligibilityRule = [
            'min_average' => 50,
            'min_score' => 40,
            'max_failures' => 2,
        ];
        $player->updateStatus($eligibilityRule);

        return response()->json(['message' => 'Grade added successfully!', 'grade' => $grade]);
    }

    public function destroy($id)
    {
        $grade = Grade::findOrFail($id);
        $grade->delete();

        $player = Player::find($grade->player_id);
        $eligibilityRule = [
            'min_average' => 50,
            'min_score' => 40,
            'max_failures' => 2,
        ];
        $player->updateStatus($eligibilityRule);

        return response()->json(['message' => 'Grade deleted successfully!']);
    }
}