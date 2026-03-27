<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LineupPlayer extends Model
{
    use HasFactory;

    protected $fillable = ['lineup_id', 'player_id', 'position', 'is_starter'];

    public function lineup()
    {
        return $this->belongsTo(Lineup::class);
    }

    public function player()
    {
        return $this->belongsTo(Player::class);
    }
}