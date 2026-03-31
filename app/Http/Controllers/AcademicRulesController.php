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
        $rules = AcademicRules::all();
        return response()->json($rules);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAcademicRulesRequest $request)
    {
        $validated = $request->validated();
        $rule = AcademicRules::create($validated);
        return response()->json($rule, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(AcademicRules $academicRules)
    {
        return response()->json($academicRules);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAcademicRulesRequest $request, AcademicRules $academicRules)
    {
        $academicRules->update($request->validated());
        return response()->json($academicRules);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AcademicRules $academicRules)
    {
        $academicRules->delete();
        return response()->json(null, 204);
    }
}
