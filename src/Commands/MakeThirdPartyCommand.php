<?php

namespace BinarCode\LaravelThirdParty\Commands;

use Illuminate\Console\Command;

class MakeThirdPartyCommand extends Command
{
    public $signature = 'make:third-party';

    public $description = 'Make third party component.';

    public function handle()
    {
        $this->comment('Creating Third Party...');

        /*From the UI: https://api.vacatures.co/api/candidate/v1/login/sso/redirect?provider=linkedin&job_board_id=1&redirect_job_board_url=https%3A%2F%2Fvacatures.co%2Faccount&isEmployer=false*/
        /*From FB: https://api.vacatures.co/api/candidate/v1/login/sso/handle?state=linkedin%2C1%2C0%2Chttps%3A%2F%2Fvacatures.co%2Faccount&code=AQQCJyuvjfhlXSPvNcuEMYdlUBcQZYdS-OBpaomqIh6iwg-9TOzbajHfUv07wOLorfN8dpks0NJkUPY54L0wC-fWX_iXgkckrx3JTj2ykpQFtxPz2TFM3sijw29cpypnX4k8mBJ6O1QOeO70NDGxZt1ynortDNi_eU_UMneueTjHcFuSP_TxKW-XWJJx1g*/

        $this->comment('Third party created!');
    }
}
