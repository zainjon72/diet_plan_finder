<?php

use Illuminate\Database\Seeder;
// use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class)->create([
            'email' => 'admin@gmail.com',
            // 'number' => 
            'image' => 'all_images/admin.jfif',
            'role' => 'admin',
            'password' => Hash::make('12345678'),
        ]); 
         factory(App\User::class)->create([
            'email' => 'nutritionist@gmail.com',
            'image' => 'all_images/nutritionist.jfif',
            'role' => 'nutritionist',
            'password' => Hash::make('12345678'),
        ]);
          factory(App\User::class)->create([
            'email' => 'user@gmail.com',
            'image' => 'all_images/customer.jfif',
            'role' => 'customer',
            'password' => Hash::make('12345678'),
        ]);
    }
}
