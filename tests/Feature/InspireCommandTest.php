<?php

namespace Tests\Feature;

use Tests\TestCase;

class InspireCommandTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testInspireCommand()
    {
        $this->artisan('inspire')
             ->expectsOutput('Simplicity is the ultimate sophistication.')
             ->assertExitCode(0);
    }
}
