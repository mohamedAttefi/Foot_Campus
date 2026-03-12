<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AcademicRecord extends Model
{
    /** @use HasFactory<\Database\Factories\AcademicRecordFactory> */
    use HasFactory;

    protected $fillable = ['period', 'average', 'player_id'];

    public function player()
    {
        return $this->belongsTo(Player::class);
    }
}

