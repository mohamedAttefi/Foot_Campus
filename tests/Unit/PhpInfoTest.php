<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class PhpInfoTest extends TestCase
{
    public function test_phpinfo()
    {
        phpinfo();
        $this->assertTrue(true);
    }
}