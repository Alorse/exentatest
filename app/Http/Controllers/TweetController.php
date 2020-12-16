<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Actions\TweetActions;

class TweetController extends Controller
{

    /**
     * @var tweetActions
     */
    private $tweetActions;

    public function __construct(
        TweetActions $tweetActions
    ){
        $this->tweetActions = $tweetActions;
    }
    /**
     * Store new tweet.
     *
     * @return \Illuminate\View\View
     */
    public function store(Request $request)
    {
        $text = $request->input('text');
        $this->tweetActions->store(Auth::user()->id, $text);
        return redirect('/dashboard');
    }
}