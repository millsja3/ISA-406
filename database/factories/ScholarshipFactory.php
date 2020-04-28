<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\MiamiOH\Model\Scholarship;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Scholarship::class, function (Faker $faker) {
    return [
        'scholarship_id'=>$faker->randomNumber(5),
        'name'=>Str::random(10),
        'description'=>str::random(15),
        'yearCreated'=>$faker->randomNumber(4),
        //
    ];
});
