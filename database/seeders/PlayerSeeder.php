<?php

namespace Database\Seeders;

use App\Models\Player;
use App\Models\User;
use App\Models\Team;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PlayerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Get teams and player users
        $teams = Team::take(2)->get();
        $playerUsers = User::where('role', 'player')->take(30)->get();

        if ($teams->count() >= 2 && $playerUsers->count() >= 30) {
            // Assign 15 players to each team
            foreach ($playerUsers as $index => $user) {
                $teamIndex = $index < 15 ? 0 : 1; // First 15 to team 1, next 15 to team 2
                $jerseyNumber = ($index % 15) + 1;
                
                Player::create([
                    'user_id' => $user->id,
                    'team_id' => $teams[$teamIndex]->id,
                    'jersey_number' => $jerseyNumber,
                    'is_eligible' => true,
                ]);
            }
        }
    }
}
