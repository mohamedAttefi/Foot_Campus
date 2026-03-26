<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Team;
use App\Models\Player;
use App\Models\MatchEvent;
use App\Models\Standing;
use App\Models\GamePlay;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Seed users
        User::factory(50)->create();

        // Seed teams
        Team::factory(10)->create();

        // Seed players
        Player::factory(100)->create();

        // Seed match events
        MatchEvent::factory(30)->create();

        // Seed standings
        Standing::factory(10)->create();

        // Seed game plays
        GamePlay::factory(20)->create();
    }
}
