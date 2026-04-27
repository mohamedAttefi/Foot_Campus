<?php

namespace Database\Seeders;

use App\Models\Grade;
use App\Models\Player;
use App\Models\Subject;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GradeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create some subjects first
        $subjects = [
            ['name' => 'Mathematics'],
            ['name' => 'English Literature'],
            ['name' => 'Physics'],
            ['name' => 'Chemistry'],
            ['name' => 'History'],
        ];

        foreach ($subjects as $subject) {
            Subject::create($subject);
        }

        // Get players and subjects for grading
        $players = Player::take(10)->get();
        $subjectModels = Subject::all();

        foreach ($players as $player) {
            foreach ($subjectModels as $subject) {
                Grade::create([
                    'player_id' => $player->id,
                    'subject_id' => $subject->id,
                    'score' => rand(65, 95) + (rand(0, 99) / 100), // Score from 65.00 to 95.99
                    'term_name' => 'Fall 2024',
                ]);
            }
        }

        // Create additional random grades
    }
}
