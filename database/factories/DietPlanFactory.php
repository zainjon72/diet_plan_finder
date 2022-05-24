<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\DietPlan;
use Faker\Generator as Faker;

$factory->define(DietPlan::class, function (Faker $faker) {
    return [
        //
    ];

    public function user(){
    	return $this->belongTo(User::class);
    } 
    public function cart(){
    	return $this->belongTo(Cart::class);
    }


});
