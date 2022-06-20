<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\DietPlan;
use App\DietPlanMeal;
use App\Meal;
use Faker\Generator as Faker;

$factory->define(DietPlanMeal::class, function (Faker $faker) {
    return [
    	'diet_plan_id' => DietPlan::pluck('id')->random(),
    	'meal_id' => Meal::pluck('id')->random()
        //
    ];
});
