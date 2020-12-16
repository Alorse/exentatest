<?php

namespace App\Actions;

use App\Models\Follow;

class FollowActions
{
    public function find(int $id){
        
    }

    public function findFollowers($user_id){
        return Follow::where('follower_user_id', $user_id)->get();
    }

    public function findFollowing($user_id){
        return Follow::where('followed_user_id', $user_id)->get();
    }
}