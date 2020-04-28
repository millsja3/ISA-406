<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\MiamiOH\Model\CompletedCourses;
use Faker\Generator as Faker;
use Illuminate\Support\Str;


$factory->define(CompletedCourses::class, function (Faker $faker) {
    return [
       'courselistid'=>$faker->randomNumber(5),
        'uniqueid'=>Str::random(6),
        'course'=>Str::random(6),
        'courseGrade'=>Str::random(6),
        //
    ];
});
