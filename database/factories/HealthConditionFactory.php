<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\HealthCondition;
use Faker\Generator as Faker;

$factory->define(HealthCondition::class, function (Faker $faker) {
    return [
        //
    ];
    public function user(){
    return	$this->belongTo(User::class);
    }
});
