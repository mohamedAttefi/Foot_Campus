<?php

namespace Database\Seeders;

use App\Models\GamePlay;
use App\Models\Team;
use App\Models\Season;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class GamePlaySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $teams = Team::take(2)->get();
        
        // Create a default season if none exists
        if (!Season::exists()) {
            $season = Season::create([
                'label' => 'Default Season',
                'is_active' => true,
            ]);
        } else {
            $season = Season::first();
        }
        
        if ($teams->count() >= 2) {
            $matches = [
                [
                    'home_team_id' => $teams[0]->id,
                    'away_team_id' => $teams[1]->id,
                    'season_id' => $season->id,
                    'date' => Carbon::now()->addDays(3)->toDateString(),
                    'time' => '15:00:00',
                    'location' => 'University Field',
                    'status' => 'scheduled',
                ],
                [
                    'home_team_id' => $teams[1]->id,
                    'away_team_id' => $teams[0]->id,
                    'season_id' => $season->id,
                    'date' => Carbon::now()->addDays(7)->toDateString(),
                    'time' => '16:00:00',
                    'location' => 'College Ground',
                    'status' => 'scheduled',
                ]
            ];

            foreach ($matches as $match) {
                GamePlay::create($match);
            }
        }

        // Create additional random matches
    }
}
