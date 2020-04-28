<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\MiamiOH\Model\Student_Info;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Student_Info::class, function (Faker $faker) {
    return [
        'uniqueid'=>Str::random(6),
        'full_name'=>Str::random(15),
        'campus_addr'=>$faker->streetAddress(),
        'phone_Num'=>$faker->phoneNumber(),
        'academicyear'=>Str::random(7),
        'minors'=>Str::random(20),
        'majors'=>Str::random(20),
        'career_type'=>Str::random(3),
        'grad_date'=>Str::random(6),
        'citzen'=>Str::random(3),
        'gpa'=>Str::random(3),
        'statement'=>Str::random(15),
        'recieved_scholarship'=>Str::random(2),
        'scholarship_id'=>$faker->randomNumber(4),
    ];
});
