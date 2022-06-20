<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(HealthConditionSeeder::class);
        $this->call(MealSeeder::class);
        $this->call(DietPlanSeeder::class);
        $this->call(DietPlanMealSeeder::class);
    }
}
