<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\HealthCondition;
use Faker\Generator as Faker;
use Illuminate\Support\Str;


$factory->define(HealthCondition::class, function (Faker $faker) {
    return [
        'discription' => $faker->text($maxNbChars = 200)
        // 'created_by' => 2
    ];
});
