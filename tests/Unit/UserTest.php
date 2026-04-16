<?php

namespace Tests\Unit;

use App\Models\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function test_it_can_create_a_user()
    {
        $user = User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        $this->assertDatabaseHas('users', [
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    }

    /** @test */
    public function test_it_hides_password_in_serialization()
    {
        $user = User::factory()->create([
            'password' => bcrypt('password'),
        ]);

        $this->assertArrayNotHasKey('password', $user->toArray());
    }
}