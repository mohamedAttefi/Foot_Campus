<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Standing extends Model
{
    /** @use HasFactory<\Database\Factories\StandingFactory> */
    use HasFactory;

    protected $fillable = ['team_id', 'points', 'wins', 'draws', 'losses', 'season_id', 'goals_for', 'goals_against', 'goal_difference'];

    public function team()
    {
        return $this->belongsTo(Team::class);
    }
    
}
