<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\MiamiOH\Model\Winners;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Winners::class, function (Faker $faker) {
    return [
        'w_id'=>$faker->randomNumber('5'),
        'uniqueid'=>str::random(10),
        'scholarship_id'=>$faker->randomNumber('5'),
        'year_won'=>str::random(4),
    ];
});
