<?php

use \Faker\Generator;
use BinarCode\LaravelThirdParty\Models\ThirdParty;

/* @var Illuminate\Database\Eloquent\Factory $factory */
$factory->define(ThirdParty::class, function (Generator $faker) {
    return [
        'name' => $faker->word,
        'class' => $faker->word,
    ];
});
