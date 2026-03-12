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
}
