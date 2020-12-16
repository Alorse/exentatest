<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Tweets;

class TweetsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
        // Create 20 random users
        $total_tweets = 50;
        for ($i = 1; $i <= $total_tweets; $i++) {
            Tweets::create([
                'user_id' => User::all()->random(1)->first()->id,
                'text' => $faker->realText(),
            ]);
        }
    }
}
