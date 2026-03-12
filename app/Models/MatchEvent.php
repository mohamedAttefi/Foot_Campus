<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MatchEvent extends Model
{
    /** @use HasFactory<\Database\Factories\MatchEventFactory> */
    use HasFactory;

    protected $fillable = ['minute', 'type', 'match_id', 'player_id'];

    public function match()
    {
        return $this->belongsTo(GamePlay::class);
    }

    public function player()
    {
        return $this->belongsTo(Player::class);
    }
}
