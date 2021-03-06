<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Actions\TweetActions;
use App\Actions\FollowActions;

class UserController extends Controller
{

    /**
     * @var tweetActions
     */
    private $tweetActions;

    /**
     * @var followActions
     */
    private $followActions;

    public function __construct(
        TweetActions $tweetActions,
        FollowActions $followActions
    ){
        $this->tweetActions = $tweetActions;
        $this->followActions = $followActions;
    }
    /**
     * Show the profile for current user.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        if(Auth::check()) {
            return $this->dasboardView(Auth::user());
        } else {
            return redirect('/login');
        }
    }

    /**
     * Show the profile for a given user.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        return $this->dasboardView(User::findOrFail($id));
    }

    private function dasboardView($user)
    {
        $imfollow = count($this->followActions->areFollowers(
            Auth::user()->id, $user->id
        ));
        $followig = $this->followActions->findFollowers($user->id);
        return view('dashboard', [
            'user' => $user,
            'tweets' => $this->tweetActions->findByParams(
                $followig,
                $user->id
            ),
            'following' => count($followig),
            'followers' => count($this->followActions->findFollowing($user->id)),
            'who_follow' => $this->followActions->whoToFollow(),
            'imfollow' => $imfollow > 0 ? true : false
        ]);
    }
}