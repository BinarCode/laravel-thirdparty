<?php

namespace BinarCode\LaravelThirdParty\Http\Controllers;

use BinarCode\LaravelThirdParty\Models\ThirdParty;
use Illuminate\Http\Request;

class ThirdPartyController
{
    public function index()
    {
        return response()->json([
            'third_parties' => ThirdParty::all(),
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'key' => [
                'required',
                'unique:' . config('thirdparty.table_name'),
            ],
            'name' => 'required',
            'class' => 'required',
        ]);

        $party = ThirdParty::create($request->all());

        return response()->json($party);
    }
}
