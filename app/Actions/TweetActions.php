<?php

namespace App\Actions;

use App\Models\Tweets;

class TweetActions
{
    public function findByParams($params, $user_id, $orderBy = 'DESC'){
        return Tweets::where('user_id', $user_id)
            ->orderBy('id', $orderBy)
            ->get();
    }

    public function store($user_id, $text){
        return Tweets::create([
            'user_id' => $user_id,
            'text' => $text
        ]);
    }
}