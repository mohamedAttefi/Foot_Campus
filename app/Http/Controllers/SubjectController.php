<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use App\Http\Requests\StoreSubjectRequest;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    public function index()
    {
        return response()->json(['subjects' => Subject::all()]);
    }

    public function store(StoreSubjectRequest $request)
    {
        $validated = $request->validated();

        $subject = Subject::create($validated);

        return response()->json(['message' => 'Subject created successfully!', 'subject' => $subject]);
    }

    public function destroy($id)
    {
        $subject = Subject::findOrFail($id);
        $subject->delete();

        return response()->json(['message' => 'Subject deleted successfully!']);
    }
}