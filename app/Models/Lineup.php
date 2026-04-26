<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lineup extends Model
{
    /** @use HasFactory<\Database\Factories\LineupFactory> */
    use HasFactory;

    protected $fillable = ['game_play_id', 'team_id', 'validated_by_admin'];

    public function match()
    {
        return $this->belongsTo(GamePlay::class, 'game_play_id');
    }

    public function team()
    {
        return $this->belongsTo(Team::class);
    }

    public function players()
    {
        return $this->belongsToMany(Player::class, 'lineup_players')
            ->withPivot('position', 'is_starter');
    }

    public function lineupPlayers()
    {
        return $this->hasMany(LineupPlayer::class);
    }
}
