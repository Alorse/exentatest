<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Create and basic user
        User::create([
            'name' => 'Admin Exenta',
            'username' => '@admin',
            'email' => 'admin@mail.com',
            'password' => '$2y$10$MgW98d2i9JZ/jEePgqFys.g5ZZozoKU.9yhW/t9DE8gF5a2lkM8Xm', // 12345678
        ]);
        
        $faker = \Faker\Factory::create();
        // Create 20 random users
        $total_users = 20;
        for ($i = 1; $i <= $total_users; $i++) {
            User::create([
                'name' => $faker->name,
                'username' => '@' . $faker->userName,
                'email' => $faker->unique()->safeEmail,
                'password' => Hash::make('password'),
            ]);
        }
    }
}
