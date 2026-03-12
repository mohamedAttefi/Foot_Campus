<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GamePlay extends Model
{
    /** @use HasFactory<\Database\Factories\GamePlayFactory> */
    use HasFactory;
    protected $table = 'matches';

    protected $fillable = ['date', 'status', 'home_score', 'away_score'];

    public function homeTeam()
    {
        return $this->belongsTo(Team::class, 'home_team_id');
    }

    public function awayTeam()
    {
        return $this->belongsTo(Team::class, 'away_team_id');
    }

    public function lineups()
    {
        return $this->hasMany(Lineup::class);
    }

    public function events()
    {
        return $this->hasMany(MatchEvent::class);
    }


}
