<?php

namespace App\Actions;

use App\Models\Follow;
use App\Models\User;

class FollowActions
{
    public function findFollowers($user_id){
        return Follow::where('follower_user_id', $user_id)->get();
    }

    public function findFollowing($user_id){
        return Follow::where('followed_user_id', $user_id)->get();
    }

    public function areFollowers($follower, $followed){
        return Follow::where(
            [
                ['follower_user_id', $follower],
                ['followed_user_id', $followed],
            ]
        )->get();
    }

    public function whoToFollow(){
        return User::inRandomOrder()->limit(5)->get();
    }

    public function store($logged_id, $user_id, $action){
        if(!$action) {
            Follow::create([
                'follower_user_id' => $logged_id,
                'followed_user_id' => $user_id,
            ]);
        } else {
            Follow::where([
                ['follower_user_id', $logged_id],
                ['followed_user_id', $user_id],
            ])->delete();
        }

        return true;
    }
}