<?php

use Illuminate\Database\Seeder;

class HealthConditionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          factory(App\HealthCondition::class)->create([
            'created_by' => 1,
        ]);  
         factory(App\HealthCondition::class)->create([
            'created_by' => 1,
        ]);
           factory(App\HealthCondition::class)->create([
            'created_by' => 1,
        ]);
    }
}
