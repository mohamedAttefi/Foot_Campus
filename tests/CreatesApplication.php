<?php

namespace Tests;

use Illuminate\Foundation\Testing\TestCase;

trait CreatesApplication
{
    /**
     * Creates the application.
     *
     * @return \Illuminate\Foundation\Application
     */
    public function createApplication()
    {
        echo "Initializing application...\n";
        $app = require __DIR__.'/../bootstrap/app.php';
        echo "Application initialized.\n";
        return $app;
    }
}