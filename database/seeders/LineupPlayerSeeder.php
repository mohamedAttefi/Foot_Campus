<?php

namespace Database\Seeders;

use App\Models\LineupPlayer;
use App\Models\Lineup;
use App\Models\Player;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LineupPlayerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Get all lineups
        $lineups = Lineup::all();
        
        foreach ($lineups as $lineup) {
            // Get players for this team
            $teamPlayers = Player::where('team_id', $lineup->team_id)->take(15)->get();
            
            // Define positions (11 starters + 4 substitutes)
            $positions = [
                'GK', 'DEF', 'DEF', 'DEF', 'DEF', 
                'MID', 'MID', 'MID', 'MID', 
                'ST', 'ST', 
                'SUB', 'SUB', 'SUB', 'SUB'
            ];
            
            foreach ($teamPlayers as $index => $player) {
                LineupPlayer::create([
                    'lineup_id' => $lineup->id,
                    'player_id' => $player->id,
                    'position' => $positions[$index] ?? 'SUB',
                    'is_starter' => $index < 11,
                ]);
            }
        }
    }
}
