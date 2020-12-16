<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Follow;

class FollowSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $total_follow = 10;
        for ($i = 1; $i <= $total_follow; $i++) {
            $users = User::all()->random(1);
            Follow::create([
                'follower_user_id' => 1,
                'followed_user_id' => $users->first()->id,
            ]);
        }
        for ($i = 1; $i <= $total_follow; $i++) {
            $users = User::all()->random(2);
            Follow::create([
                'follower_user_id' => $users->first()->id,
                'followed_user_id' => $users->last()->id,
            ]);
        }
    }
}
