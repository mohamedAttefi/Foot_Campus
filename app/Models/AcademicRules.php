<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AcademicRules extends Model
{
    /** @use HasFactory<\Database\Factories\AcademicRulesFactory> */
    use HasFactory;

    protected $fillable = ['min_average_threshold', 'max_failed_subjects', 'is_active'];
}
