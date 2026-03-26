<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    /** @use HasFactory<\Database\Factories\TeamFactory> */
    use HasFactory;
    protected $fillable = ['name', 'class_group'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function homeMatches()
    {
        return $this->hasMany(GamePlay::class, 'home_team_id');
    }

    public function awayMatches()
    {
        return $this->hasMany(GamePlay::class, 'away_team_id');
    }

    public function standing()
    {
        return $this->hasOne(Standing::class);
    }

    public function players()
    {
        return $this->hasMany(Player::class);
    }

    public function matchStats()
    {
        return $this->hasMany(MatchStat::class);
    }

}
