<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\MatchEvent>
 */
class MatchEventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'game_id' => \App\Models\GamePlay::factory(),
            'event_type' => fake()->randomElement(['Goal', 'Foul', 'Yellow Card', 'Red Card']),
            'player_id' => \App\Models\Player::factory(),
            'minute' => fake()->numberBetween(1, 90),
        ];
    }
}
