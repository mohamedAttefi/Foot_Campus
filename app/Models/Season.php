<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Season extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'start_date',
        'end_date',
        'is_active'
    ];

    public function gamePlays()
    {
        return $this->hasMany(GamePlay::class);
    }

    public function standings()
    {
        return $this->hasMany(Standing::class);
    }
}
