<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\DietPlan;
use App\HealthCondition;
use Faker\Generator as Faker;

$factory->define(DietPlan::class, function (Faker $faker) {
    return [
        //
          'title' => $faker->text(10),
        'discription' => 'Enim est minus incidunt pariatur. Et illo qui velit suscipit optio quia. Id rerum voluptatem et ea rerum ipsa.',
        'price' => $faker->numberBetween($min = 10, $max = 100),
        'status' => 'pending',
        // 'image' => 'https://source.unsplash.com/random/?diet',
        'created_by' => 2,
        'health_condition_id' => HealthCondition::pluck('id')->random(),
    ];
});
