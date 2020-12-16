<x-app-layout>
    <x-slot name="header">

    </x-slot>


<div class="page-wrap">

    <div class="left-sidebar">

        <div class="user-summary top-level-panel">
            @unless (Auth::user()->id == $user->id)
            <form method="post" action="/follow" enctype="multipart/form-data" style="height: 0;">
                {{ csrf_field() }}
                <input name="user_id" type="hidden" value="{{$user->id}}" />
                <input name="action" type="hidden" value="{{$imfollow}}" />
                <button type="submit">
                    <div class="follow">
                        <img src="{{ asset('images/follow.gif') }}" alt="" />
                        @if ($imfollow)
                            <p style="color:red">Unfollow</p>
                        @else
                            <p>Follow</p>
                        @endif
                    </div>
                </button>
            </form>
            @endunless
            <div class="user-info-wrap">
                <img src="{{ asset('images/avatars/' . $user->id . '.png') }}" 
                    alt="" class="profile-picture" />

                <div class="username-wrap">
                    <a href="#" class="display-name">{{ $user->name }}</a>
                    <a href="#" class="username">{{ $user->username }}</a>
                </div>

                <ul class="user-stats">
                    <li>
                        <a href="#" class="user-stats-header">Tweets</a>
                        <a href="#" class="user-stats-value">{{ count($tweets) }}</a>
                    </li>
                    <li>
                        <a href="#" class="user-stats-header">Following</a>
                        <a href="#" class="user-stats-value">{{ $following }}</a>
                    </li>
                    <li>
                        <a href="#" class="user-stats-header">Followers</a>
                        <a href="#" class="user-stats-value">{{ $followers }}</a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="trending top-level-panel">
            <h1>Trends</h1>
            <div class="clear"></div>

            <ul class="trend-list">
                <li class="trend">
                    <a href="#" class="trending-hashtag">#php</a>
                    <p class="trend-description">Unde omnis iste #php natus error sit</p>
                    <p class="subtext">70.2K Tweets about this trend</p>
                </li>

                <li class="trend">
                    <a href="#" class="trending-hashtag">#HotCode</a>
                    <p class="trend-description">#HotCode consectetur adipiscing elit, sed do eiusmod tempor</p>
                    <p class="subtext">10K Tweets about this trend</p>
                </li>

                <li class="trend">
                    <a href="#" class="trending-hashtag">#CodeForFun</a>
                    <p class="subtext">Just started trending</p>
                </li>
            </ul>
        </div>
    </div>

    <div class="central-content top-level-panel">
        <ul class="tweet-feed">
        @if (Auth::user()->id == $user->id)
            <li class="new-tweet">
                <img src="{{ asset('images/avatars/' . $user->id . '.png') }}" 
                alt="" class="profile-picture-small" />
                <div class="tweet-input-wrap">
                    <form method="post" action="/tweet" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <input
                            id="text"
                            name="text"
                            type="text"
                            placeholder="What's happening?"
                         />
                        <button type="submit" class="submit">Tweet</button>
                    </form>
                </div>
            </li>
        @endif
            @foreach ($tweets as $tweet)
            <li class="tweet">
                <img src="{{ asset('images/avatars/' . $tweet->user_id . '.png') }}" 
                alt="" class="tweet-profile-thumbnail" />
                <div class="tweet-content-wrap">
                    <div class="tweet-header">
                        <a href="#" class="tweet-display-name">{{ $user->name }}</a>
                        <a href="#" class="tweet-username">{{ $user->username }}</a>
                        <a href="#" class="tweet-time">2h</a>
                    </div>
                    <p class="tweet-text">
                        {{ $tweet->text }}
                    </p>
                    <ul class="tweet-action-buttons">
                        <li>
                            <img src="{{ asset('images/reply.gif') }}" alt="" />
                        </li>
                        <li>
                            <img src="{{ asset('images/retweet.gif') }}" alt="" />
                        </li>
                        <li>
                            <img src="{{ asset('images/star.gif') }}" alt="" />
                        </li>
                        <li>
                            <img src="{{ asset('images/more.gif') }}" alt="" />
                        </li>
                    </ul>

                </div>
                <div class="clear"></div>
            </li>
            @endforeach
        </ul>
        {{ $tweets->links() }}
    </div>

    <div class="right-sidebar">
        <div class="who-to-follow top-level-panel">
            <ul class="who-to-follow-header">
                <li>
                    <h1>Who to follow</h1>
                </li>
            </ul>

            <ul class="who-to-follow-list">
                @foreach ($who_follow as $follow)
                <li>
                    <img src="{{ asset('images/avatars/' . $follow->id . '.png') }}" 
                    alt="" class="tweet-profile-thumbnail" />

                    <div class="who-to-follow-right-wrap">
                        <p class="who-to-follow-line-wrap">
                            <a href="{{ route('user', ['id' => $follow->id]) }}" 
                                class="who-to-follow-display-name">{{ $follow->name }}</a>
                            <a href="{{ route('user', ['id' => $follow->id]) }}" 
                                class="tweet-username">{{ $follow->username }}</a>
                        </p>

                        <div class="clear"></div>

                        <div class="follow">
                            <img src="{{ asset('images/follow.gif') }}" alt="" />
                            <p>
                                <a href="{{ route('user', ['id' => $follow->id]) }}" >follow</a>
                            </p>
                        </div>
                    </div>

                    <div class="clear"></div>
                </li>
                @endforeach
            </ul>
            <div class="clear"></div>
        </div>
        <div class="clear"></div>
        <div class="footer top-level-panel">
            <ul>
                <li><a href="#">About</a></li>
                <li><a href="#">Help</a></li>
                <li><a href="#">Terms</a></li>
                <li><a href="#">Privacy</a></li>
            </ul>
        </div>
    </div>
</div>
            </div>
        </div>
    </div>
</x-app-layout>
