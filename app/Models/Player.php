<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    /** @use HasFactory<\Database\Factories\PlayerFactory> */
    use HasFactory;

    protected $fillable = ['name', 'eligible', 'team_id'];


    public function lineups()
    {
        return $this->belongsToMany(Lineup::class, 'lineup_players')
            ->withPivot('position', 'is_starter');
    }

    public function academicRecords()
    {
        return $this->hasMany(AcademicRecord::class);
    }

    public function team()
    {
        return $this->belongsTo(Team::class);
    }

    public function events()
    {
        return $this->hasMany(MatchEvent::class);
    }

    public function grades()
    {
        return $this->hasMany(Grade::class);
    }

    public function calculateAverage()
    {
        return $this->grades()->avg('score');
    }

    public function checkEligibility($eligibilityRule)
    {
        $average = $this->calculateAverage();
        $failedSubjects = $this->grades()->where('score', '<', $eligibilityRule['min_score'])->count();

        return $average >= $eligibilityRule['min_average'] && $failedSubjects <= $eligibilityRule['max_failures'];
    }

    public function updateStatus($eligibilityRule)
    {
        $this->is_eligible = $this->checkEligibility($eligibilityRule);
        $this->average_score = $this->calculateAverage();
        $this->save();
    }

    public function getAcademicHistory()
    {
        return $this->grades()->orderBy('term_name')->get();
    }
}
