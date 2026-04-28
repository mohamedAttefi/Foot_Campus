<?php

require_once __DIR__ . '/vendor/autoload.php';

$app = require_once __DIR__ . '/bootstrap/app.php';

$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

try {
    echo "Testing API with authentication...\n";
    
    // Get a coach user
    $coachUser = \App\Models\User::where('role', 'coach')->first();
    if (!$coachUser) {
        echo "No coach user found\n";
        exit;
    }
    
    echo "Coach user: " . $coachUser->name . " (ID: " . $coachUser->id . ")\n";
    
    // Create a token
    $token = $coachUser->createToken('test-api-token')->plainTextToken;
    echo "Generated token: " . $token . "\n";
    
    // Test the API call manually by simulating the request
    $_SERVER['REQUEST_URI'] = '/api/player';
    $_SERVER['REQUEST_METHOD'] = 'GET';
    $_SERVER['HTTP_AUTHORIZATION'] = 'Bearer ' . $token;
    $_SERVER['HTTP_ACCEPT'] = 'application/json';
    $_SERVER['HTTP_CONTENT_TYPE'] = 'application/json';
    
    // Simulate authentication
    \Illuminate\Support\Facades\Auth::setUser($coachUser);
    
    // Test the PlayerController index method
    $controller = new \App\Http\Controllers\PlayerController();
    $response = $controller->index();
    
    echo "API Response Status: " . $response->getStatusCode() . "\n";
    echo "API Response Data:\n";
    $data = json_decode($response->getContent(), true);
    echo "Players returned: " . count($data) . "\n";
    
    if (count($data) > 0) {
        echo "First player:\n";
        $firstPlayer = $data[0];
        echo "  ID: " . $firstPlayer['id'] . "\n";
        echo "  User ID: " . $firstPlayer['user_id'] . "\n";
        echo "  Team ID: " . ($firstPlayer['team_id'] ?? 'null') . "\n";
        echo "  Jersey: " . ($firstPlayer['jersey_number'] ?? 'null') . "\n";
        echo "  Eligible: " . ($firstPlayer['is_eligible'] ? 'Yes' : 'No') . "\n";
        
        if (isset($firstPlayer['user'])) {
            echo "  User Name: " . $firstPlayer['user']['name'] . "\n";
        }
        
        if (isset($firstPlayer['team'])) {
            echo "  Team Name: " . $firstPlayer['team']['name'] . "\n";
        }
    }
    
    echo "API test completed successfully!\n";
    
} catch (Exception $e) {
    echo "Error: " . $e->getMessage() . "\n";
    echo "Stack trace:\n" . $e->getTraceAsString() . "\n";
}
