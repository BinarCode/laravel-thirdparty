<?php

namespace BinarCode\LaravelThirdParty\Http\Controllers;

use BinarCode\LaravelThirdParty\Models\ThirdParty;

class ThirdPartyController
{
    public function index()
    {
        return response()->json([
            'third_parties' => ThirdParty::all(),
        ]);
    }
}
