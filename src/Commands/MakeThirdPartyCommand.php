<?php

namespace BinarCode\LaravelThirdParty\Commands;

use Illuminate\Console\Command;

class MakeThirdPartyCommand extends Command
{
    public $signature = 'make:third-party';

    public $description = 'Make third party component.';

    public function handle()
    {
        $this->comment('All done');
    }
}
