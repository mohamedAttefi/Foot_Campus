<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Standing>
 */
class StandingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'team_id' => \App\Models\Team::factory(),
            'points' => fake()->numberBetween(0, 100),
            'played' => fake()->numberBetween(0, 38),
            'won' => fake()->numberBetween(0, 38),
            'drawn' => fake()->numberBetween(0, 38),
            'lost' => fake()->numberBetween(0, 38),
        ];
    }
}
