<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create specific users for testing
        $users = [
            [
                'name' => 'Admin User',
                'email' => 'admin@campus.com',
                'password' => Hash::make('password'),
                'role' => 'admin',
            ],
            [
                'name' => 'Coach Johnson',
                'email' => 'coach@campus.com',
                'password' => Hash::make('password'),
                'role' => 'coach',
            ],
            [
                'name' => 'Teacher Smith',
                'email' => 'teacher@campus.com',
                'password' => Hash::make('password'),
                'role' => 'teacher',
            ],
        ];

        // Create 30 player users
        for ($i = 1; $i <= 30; $i++) {
            $users[] = [
                'name' => "Player " . $i,
                'email' => "player{$i}@campus.com",
                'password' => Hash::make('password'),
                'role' => 'player',
            ];
        }

        foreach ($users as $user) {
            User::create($user);
        }
    }
}
