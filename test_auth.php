<?php

require_once __DIR__ . '/vendor/autoload.php';

$app = require_once __DIR__ . '/bootstrap/app.php';

$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

try {
    echo "Testing authentication...\n";
    
    // Check if there are any users
    $users = \App\Models\User::all();
    echo "Users count: " . $users->count() . "\n";
    
    if ($users->count() > 0) {
        $firstUser = $users->first();
        echo "First user:\n";
        echo "ID: " . $firstUser->id . "\n";
        echo "Name: " . $firstUser->name . "\n";
        echo "Email: " . $firstUser->email . "\n";
        echo "Role: " . $firstUser->role . "\n";
        
        // Check if user has tokens
        $tokens = $firstUser->tokens;
        echo "Tokens count: " . $tokens->count() . "\n";
    }
    
    // Test creating a token for a coach user
    $coachUser = \App\Models\User::where('role', 'coach')->first();
    if ($coachUser) {
        echo "\nFound coach user:\n";
        echo "ID: " . $coachUser->id . "\n";
        echo "Name: " . $coachUser->name . "\n";
        
        // Create a token for testing
        $token = $coachUser->createToken('test-token')->plainTextToken;
        echo "Test token: " . $token . "\n";
    } else {
        echo "No coach user found\n";
    }
    
    echo "Test completed successfully!\n";
    
} catch (Exception $e) {
    echo "Error: " . $e->getMessage() . "\n";
    echo "Stack trace:\n" . $e->getTraceAsString() . "\n";
}
