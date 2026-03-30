<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MatchStat extends Model
{
    /** @use HasFactory<\Database\Factories\MatchStatFactory> */
    use HasFactory;

    protected $fillable = ['game_play_id', 'home_possession', 'away_possession', 'home_shots', 'away_shots'];

    public function match()
    {
        return $this->belongsTo(GamePlay::class);
    }

    public function team()
    {
        return $this->belongsTo(Team::class);
    }
}
