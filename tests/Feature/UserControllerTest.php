<?php

namespace Tests\Feature;

use App\Models\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserControllerTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function test_it_can_list_users()
    {
        $admin = User::factory()->create(['role' => 'admin']);
        $users = User::factory(5)->create();

        $response = $this->actingAs($admin)->getJson('/users');

        $response->assertOk();
        $response->assertJsonCount(5);
    }

    /** @test */
    public function test_it_can_create_a_user()
    {
        $admin = User::factory()->create(['role' => 'admin']);

        $response = $this->actingAs($admin)->postJson('/users', [
            'name' => 'New User',
            'email' => 'newuser@example.com',
            'password' => 'password',
            'role' => 'player',
        ]);

        $response->assertCreated();
        $this->assertDatabaseHas('users', [
            'name' => 'New User',
            'email' => 'newuser@example.com',
        ]);
    }

    /** @test */
    public function test_it_can_show_a_user()
    {
        $user = User::factory()->create();

        $response = $this->getJson("/users/{$user->id}");

        $response->assertOk();
        $response->assertJson(['id' => $user->id]);
    }
}