<?php

namespace App\Actions;

use Illuminate\Support\Facades\Auth;
use App\Models\Tweets;

class TweetActions
{
    public function findByParams($params, $user_id, $orderBy = 'DESC'){

        $ids = [$user_id];
        if(Auth::user()->id == $user_id) {
            $ids = array_merge(
                $ids,
                $params->pluck('followed_user_id')->toArray()
            );
        }
        return Tweets::whereIn('user_id', $ids)
            ->orderBy('id', $orderBy)
            ->paginate(5);
    }

    public function store($user_id, $text){
        return Tweets::create([
            'user_id' => $user_id,
            'text' => $text
        ]);
    }
}