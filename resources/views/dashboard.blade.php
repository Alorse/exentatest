<x-app-layout>
    <x-slot name="header">

    </x-slot>


<div class="page-wrap">

    <div class="left-sidebar">

        <div class="user-summary top-level-panel">

            <div class="user-info-wrap">
                <img src="images/avatars/1.png" alt="" class="profile-picture" />

                <div class="username-wrap">
                    <a href="#" class="display-name">LillyRue</a>
                    <a href="#" class="username">@lilly_rue</a>
                </div>

                <ul class="user-stats">
                    <li>
                        <a href="#" class="user-stats-header">Tweets</a>
                        <a href="#" class="user-stats-value">17</a>
                    </li>
                    <li>
                        <a href="#" class="user-stats-header">Following</a>
                        <a href="#" class="user-stats-value">86</a>
                    </li>
                    <li>
                        <a href="#" class="user-stats-header">Followers</a>
                        <a href="#" class="user-stats-value">2</a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="trending top-level-panel">
            <h1>Trends</h1>
            <a href="#" class="change-trends">Change</a>
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
            <li class="new-tweet">
                <img src="images/avatars/1.png" alt="" class="profile-picture-small" />
                <div class="tweet-input-wrap">
                    <input type="text" placeholder="What's happening?" />
                    <img src="images/attach.png" alt="" class="attach-photo" />
                </div>
            </li>

            <li class="view-new-tweets">
                <p>View 22 new Tweets</p>
            </li>

            <li class="tweet">
                <img src="images/avatars/1.png" alt="" class="tweet-profile-thumbnail" />
                <div class="tweet-content-wrap">
                    <div class="tweet-header">
                        <a href="#" class="tweet-display-name">LillyRue</a>
                        <a href="#" class="tweet-username">@lilly_rue</a>
                        <a href="#" class="tweet-time">20m</a>
                    </div>
                    <p class="tweet-text">
                        Watch <a href="#" class="user-mention">@lorem_ipsum</a> dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor :</br><a href="#" class="external-link">https://google.com/1JOUC81</a>
                    </p>
                    <ul class="tweet-action-buttons">
                        <li><img src="images/reply.gif" alt="" /></li>
                        <li><img src="images/retweet.gif" alt="" /></li>
                        <li><img src="images/star.gif" alt="" /></li>
                        <li><img src="images/more.gif" alt="" /></li>
                    </ul>
                </div>
                <div class="clear"></div>
            </li>

            <li class="tweet">
                <img src="images/avatars/1.png" alt="" class="tweet-profile-thumbnail" />
                <div class="tweet-content-wrap">
                    <div class="tweet-header">
                        <a href="#" class="tweet-display-name">LillyRue</a>
                        <a href="#" class="tweet-username">@lilly_rue</a>
                        <a href="#" class="tweet-time">2h</a>
                    </div>
                    <p class="tweet-text">
                        RT <a href="#" class="user-mention">@perspiciatis</a>: Sed ut unde omnis iste natus error sit <a href="#" class="user-mention">#voluptatem</a> accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi beatae vitae dicta sunt explicabo <a href="#" class="user-mention">@architecto</a>. <a href="#" class="external-link">google.com/1P1INge</a>
                    </p>
                    <img src="images/tweet-media.jpg" alt="" class="tweet-photo" />
                    <ul class="tweet-action-buttons">
                        <li><img src="images/reply.gif" alt="" /><span></span></li>
                        <li><img src="images/retweet.gif" alt="" /><span>45</span></li>
                        <li><img src="images/star.gif" alt="" /><span>3</span></li>
                        <li><img src="images/more.gif" alt="" /></li>
                    </ul>

                    <a href="#" class="view-media">View photo</a>
                </div>
                <div class="clear"></div>
            </li>
        </ul>
    </div>

    <div class="right-sidebar">
        <div class="who-to-follow top-level-panel">
            <ul class="who-to-follow-header">
                <li>
                    <h1>Who to follow</h1>
                </li>
            </ul>

            <ul class="who-to-follow-list">
                <li>
                    <img src="images/avatars/2.png" alt="" class="tweet-profile-thumbnail" />

                    <div class="who-to-follow-right-wrap">
                        <p class="who-to-follow-line-wrap">
                            <a href="#" class="who-to-follow-display-name">Webroot</a>
                            <a href="#" class="tweet-username">@webroot</a>
                        </p>

                        <div class="clear"></div>

                        <div class="follow">
                            <img src="images/follow.gif" alt="" />
                            <p>Follow</p>
                        </div>
                    </div>

                    <div class="clear"></div>
                </li>
                <li>
                    <img src="images/avatars/3.png" alt="" class="tweet-profile-thumbnail" />

                    <div class="who-to-follow-right-wrap">
                        <p class="who-to-follow-line-wrap">
                            <a href="#" class="who-to-follow-display-name">Carter</a>
                            <a href="#" class="tweet-username">@carter3</a>
                        </p>

                        <div class="clear"></div>

                        <div class="follow">
                            <img src="images/follow.gif" alt="" />
                            <p>Follow</p>
                        </div>
                    </div>

                    <div class="clear"></div>
                </li>
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
