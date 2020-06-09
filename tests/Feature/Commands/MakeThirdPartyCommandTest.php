<?php

namespace BinarCode\LaravelThirdParty\Tests\Feature\Commands;

use BinarCode\LaravelThirdParty\Tests\TestCase;

class MakeThirdPartyCommandTest extends TestCase
{
    /** * @test */
    public function the_make_command_works()
    {
        $this->artisan('make:third-party')->expectsOutput(0);
    }
}
