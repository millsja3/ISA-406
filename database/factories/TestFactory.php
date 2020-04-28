<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\MiamiOH\Model\Test;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

$factory->define(Test::class, function (Faker $faker) {
    return [
        'test_id'=>$faker->randomNumber(10),
        'test_string'=>Str::random(10)
    ];
});
