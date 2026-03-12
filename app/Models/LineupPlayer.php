<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LineupPlayer extends Model
{
    /** @use HasFactory<\Database\Factories\LineupPlayerFactory> */
    use HasFactory;
    protected $fillable = ['lineup_id', 'player_id', 'position', 'is_starter'];

    public function Player()
}
