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
            'diet_plan_id' => 1,
            'meal_id' => 1
    	]);factory(App\DietPlanMeal::class)->create([
            'diet_plan_id' => 1,
            'meal_id' => 2
        ]);factory(App\DietPlanMeal::class)->create([
            'diet_plan_id' => 1,
            'meal_id' => 3
        ]);factory(App\DietPlanMeal::class)->create([
            'diet_plan_id' => 1,
            'meal_id' => 4
        ]); 
        factory(App\DietPlanMeal::class)->create([
            'diet_plan_id' => 2,
            'meal_id' => 1
        ]);factory(App\DietPlanMeal::class)->create([
            'diet_plan_id' => 2,
            'meal_id' => 2
        ]);factory(App\DietPlanMeal::class)->create([
            'diet_plan_id' => 2,
            'meal_id' => 3
        ]);factory(App\DietPlanMeal::class)->create([
            'diet_plan_id' => 2,
            'meal_id' => 4
        ]);
         factory(App\DietPlanMeal::class)->create([
            'diet_plan_id' => 3,
            'meal_id' => 1
        ]);factory(App\DietPlanMeal::class)->create([
            'diet_plan_id' => 3,
            'meal_id' => 2
        ]);factory(App\DietPlanMeal::class)->create([
            'diet_plan_id' => 3,
            'meal_id' => 3
        ]);factory(App\DietPlanMeal::class)->create([
            'diet_plan_id' => 3,
            'meal_id' => 4
        ]);
            factory(App\DietPlanMeal::class)->create([
            'diet_plan_id' => 4,
            'meal_id' => 1
        ]);factory(App\DietPlanMeal::class)->create([
            'diet_plan_id' => 4,
            'meal_id' => 2
        ]);factory(App\DietPlanMeal::class)->create([
            'diet_plan_id' => 4,
            'meal_id' => 3
        ]);factory(App\DietPlanMeal::class)->create([
            'diet_plan_id' => 4,
            'meal_id' => 4
        ]);
    	
    }
}
