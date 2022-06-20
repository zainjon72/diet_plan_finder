<?php

use Illuminate\Database\Seeder;

class DietPlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\DietPlan::class)->create([
            'image' => 'all_images/1.jpg'
        ]);
        factory(App\DietPlan::class)->create([
            'image' => 'all_images/2.jpg'
        ]);
        factory(App\DietPlan::class)->create([
            'image' =>'all_images/3.jpg'
        ]);
        factory(App\DietPlan::class)->create([
            'image' => 'all_images/4.jpg'
        ]);
    }
}
