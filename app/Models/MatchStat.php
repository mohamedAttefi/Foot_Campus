<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MatchStat extends Model
{
    /** @use HasFactory<\Database\Factories\MatchStatFactory> */
    use HasFactory;

    protected $fillable = ['game_play_id', 'team_id', 'possession', 'corners', 'shots', 'onTarget'];

    public function match()
    {
        return $this->belongsTo(GamePlay::class);
    }

    public function team()
    {
        return $this->belongsTo(Team::class);
    }
}
