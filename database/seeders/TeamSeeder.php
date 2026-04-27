<?php

namespace Database\Seeders;

use App\Models\Team;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Get the coach user for team assignment
        $coach = User::where('email', 'coach@campus.com')->first();

        $teams = [
            [
                'name' => 'Campus Eagles',
                'class_group' => 'Senior',
                'coach_id' => $coach ? $coach->id : 1,
            ],
            [
                'name' => 'Academic Lions',
                'class_group' => 'Junior',
                'coach_id' => $coach ? $coach->id : 1,
            ],
        ];

        foreach ($teams as $team) {
            Team::create($team);
        }
    }
}
