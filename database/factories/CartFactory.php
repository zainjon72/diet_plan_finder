<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\OrderItems;
use Faker\Generator as Faker;

$factory->define(OrderItems::class, function (Faker $faker) {
    return [
        //
    ];
    public function dietplans(){
    	return $this->hasMany(DietPlan::class)
    }
});
