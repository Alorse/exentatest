<?php

namespace App\Actions;

use App\Models\Tweets;

class TweetActions
{
    public function find(int $id){
        
    }

    public function findAll(int $id){

    }
    public function findByParams($params, $user_id, $orderBy = 'ASC'){
        return Tweets::where('user_id', $user_id)
            ->orderBy('id', $orderBy)
            ->get();
    }
}