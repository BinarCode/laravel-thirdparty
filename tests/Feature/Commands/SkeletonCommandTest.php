<?php

namespace Spatie\Skeleton\Tests\Feature\Commands;

use Spatie\Skeleton\Tests\TestCase;

class SkeletonCommandTest extends TestCase
{
    /** * @test */
    public function the_skeleton_command_workds()
    {
        $this->artisan('skeleton')->assertExitCode(0);
    }
}
