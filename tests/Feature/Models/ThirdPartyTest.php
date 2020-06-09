<?php

namespace BinarCode\LaravelThirdParty\Tests\Feature\Models;

use BinarCode\LaravelThirdParty\Models\ThirdParty;
use BinarCode\LaravelThirdParty\Tests\TestCase;

class ThirdPartyTest extends TestCase
{
    /** * @test */
    public function it_can_create_a_model()
    {
        /** * @var ThirdParty $thirdParty*/
        $thirdParty = ThirdParty::create([
            'key' => 'facebook_sso',
            'class' => 'class',
            'name' => 'Facebook SSO',
        ]);

        $this->assertDatabaseCount('third_parties', 1);
        $this->assertEquals('Facebook SSO', $thirdParty->name);
    }
}
