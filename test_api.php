<?php

require_once __DIR__ . '/vendor/autoload.php';

$app = require_once __DIR__ . '/bootstrap/app.php';

$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

try {
    // Test database connection
    $players = \App\Models\Player::with(['team', 'user', 'grades'])->get();
    echo "Players count: " . $players->count() . "\n";
    
    if ($players->count() > 0) {
        echo "First player data:\n";
        $firstPlayer = $players->first();
        echo "ID: " . $firstPlayer->id . "\n";
        echo "User ID: " . $firstPlayer->user_id . "\n";
        echo "Team ID: " . $firstPlayer->team_id . "\n";
        echo "Jersey Number: " . $firstPlayer->jersey_number . "\n";
        echo "Is Eligible: " . ($firstPlayer->is_eligible ? 'Yes' : 'No') . "\n";
        
        // Test relationships
        if ($firstPlayer->user) {
            echo "User Name: " . $firstPlayer->user->name . "\n";
        } else {
            echo "No user relationship found\n";
        }
        
        if ($firstPlayer->team) {
            echo "Team Name: " . $firstPlayer->team->name . "\n";
        } else {
            echo "No team relationship found\n";
        }
        
        echo "Grades count: " . $firstPlayer->grades->count() . "\n";
    }
    
    echo "Test completed successfully!\n";
    
} catch (Exception $e) {
    echo "Error: " . $e->getMessage() . "\n";
    echo "Stack trace:\n" . $e->getTraceAsString() . "\n";
}
