<?php

namespace BinarCode\LaravelThirdParty\Tests\Feature\Http\Controllers;

use BinarCode\LaravelThirdParty\Tests\TestCase;

class ThirdPartyControllerTest extends TestCase
{
    public function test_third_party_controller_returns_ok()
    {
        $this->get('/')
            ->assertOk();
    }
}
