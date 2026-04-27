<?php

namespace Database\Seeders;

use App\Models\Lineup;
use App\Models\GamePlay;
use App\Models\Team;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LineupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Get all game plays
        $gamePlays = GamePlay::all();
        
        foreach ($gamePlays as $gamePlay) {
            // Create lineup for home team
            Lineup::create([
                'game_play_id' => $gamePlay->id,
                'team_id' => $gamePlay->home_team_id,
            ]);
            
            // Create lineup for away team
            Lineup::create([
                'game_play_id' => $gamePlay->id,
                'team_id' => $gamePlay->away_team_id,
            ]);
        }
    }
}
