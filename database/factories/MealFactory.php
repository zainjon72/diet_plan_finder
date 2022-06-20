<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Meal;
use Faker\Generator as Faker;

$factory->define(Meal::class, function (Faker $faker) {
	return [
        //
		'title' => $faker->text(10),
		'discription' => $faker->text($maxNbChars = 200),
		// 'image'=>"https://source.unsplash.com/random/?food",
		'status' => 'pending'
	];
});
