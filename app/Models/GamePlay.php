<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GamePlay extends Model
{
    /** @use HasFactory<\Database\Factories\GamePlayFactory> */
    use HasFactory;
    
    protected $fillable = ['home_team_id', 'away_team_id', 'season_id', 'date','time', 'location', 'status', 'home_score', 'away_score', 'validated_by_admin'];

    public function homeTeam()
    {
        return $this->belongsTo(Team::class, 'home_team_id');
    }

    public function awayTeam()
    {
        return $this->belongsTo(Team::class, 'away_team_id');
    }

    public function season()
    {
        return $this->belongsTo(Season::class);
    }

    public function lineups()
    {
        return $this->hasMany(Lineup::class);
    }

    public function events()
    {
        return $this->hasMany(MatchEvent::class);
    }

    public function matchStat(){
        return $this->hasOne(MatchStat::class);
    }


}
