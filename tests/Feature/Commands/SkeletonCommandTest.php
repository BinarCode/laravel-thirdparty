<?php

namespace Spatie\Skeleton\Tests\Feature\Commands;

use Spatie\Skeleton\Tests\TestCase;

class SkeletonCommandTest extends TestCase
{
    /** * @test */
    public function the_skeleton_command_works()
    {
        $this->artisan('skeleton')->assertExitCode(0);
    }
}
