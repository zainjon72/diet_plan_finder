<?php

use Illuminate\Database\Seeder;

class DietPlanMealSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	factory(App\DietPlanMeal::class)->create([
    	]);
    	factory(App\DietPlanMeal::class)->create([]);
    	factory(App\DietPlanMeal::class)->create([]);
    	factory(App\DietPlanMeal::class)->create([]);
    	factory(App\DietPlanMeal::class)->create([]);
    	factory(App\DietPlanMeal::class)->create([]);
    	factory(App\DietPlanMeal::class)->create([]);
    	factory(App\DietPlanMeal::class)->create([]);
    }
}
