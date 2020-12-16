<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Actions\FollowActions;

class FollowController extends Controller
{

    /**
     * @var tweetActions
     */
    private $followActions;

    public function __construct(
        FollowActions $followActions
    ){
        $this->followActions = $followActions;
    }
    /**
     * Store new follow.
     *
     * @return redirect
     */
    public function store(Request $request)
    {
        $user_id = $request->input('user_id');
        $action = $request->input('action');
        $this->followActions->store(Auth::user()->id, $user_id, $action);
        return redirect('/user/' . $user_id);
    }
}