<?php

use Illuminate\Database\Seeder;

class MealSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         factory(App\Meal::class)->create([
            'image' => 'all_images/5.jpg',
            'created_by' => 2
        ]);
         factory(App\Meal::class)->create([
            'image' => 'all_images/6.jpg',
            'created_by' => 2
        ]);
         factory(App\Meal::class)->create([
            'image' => 'all_images/7.jpg',
            'created_by' => 2
        ]);
         factory(App\Meal::class)->create([
            'image' => 'all_images/8.jpg',
            'created_by' => 2
        ]);
    }
}
