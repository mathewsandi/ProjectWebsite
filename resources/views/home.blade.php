@extends ('master')

@section('content')
    <div class="body">
    <h1 class="header" style="text-align: center">Welcome to the home page!</h1>
        <hr></hr>
        <br>

    <div class="left-column">
        <h4><b>Twitter Feed:</b></h4>
        <a class="twitter-timeline" href="https://twitter.com/SezgiCraft" data-widget-id="673981711718436865">Tweets by @SezgiCraft</a>
        <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
        <br>
        <h4><b>Instagram Feed:</b></h4>
        <script src="http://snapwidget.com/js/snapwidget.js"></script>
        <iframe src="http://snapwidget.com/in/?u=cGVubmFkc2dufGlufDE3MHwyfDN8fHllc3w1fGZhZGVJbnxvblN0YXJ0fHllc3x5ZXM=&ve=091215" title="Instagram Widget" class="snapwidget-widget" allowTransparency="true" frameborder="0" scrolling="no" style="border:none; overflow:hidden; width:100%;"></iframe>    </div>

        <div class="center-column"">
            <h4>
                <b>
                    Latest News!
                </b>
            </h4>
            @foreach($articles as $article)
                <article>
                    <h2>
                        <a href="{{ action('ArticleController@show', [$article->id]) }}">{{ $article->title }}</a>
                    </h2>

                    <div class="text">{{ $article->body }}</div>

                </article>
            @endforeach
        </div>

    <div class="right-column">
        <h4><b>Latest Users: </b></h4>
        @foreach ($latestUsers as $latestUser)
            <div class="text"><li>
                {{ $latestUser->username }}
            </li></div>
        @endforeach
        <br>
        <h4><b>Recent Online Users:</b></h4>
        @foreach ($recentUsers as $recentUser)
            <div class="text"><li>
                {{ $recentUser->username }}
            </li></div>
        @endforeach
        <br>
        <a href="http://paypal.me/Mathew858"> <img src="http://i1206.photobucket.com/albums/bb455/IPenna/Donate_zpsx2xbgxt0.png" style="width: 215px;"></a>
        <br>
        <a href="http://www.twitter.com/PennaDSGN"> <img src="http://i1206.photobucket.com/albums/bb455/IPenna/Untitled-2_zpsvwsoq5ra.png"></a>
        <a href="http://www.instagram.com/PennaDSGN"><img src="http://i1206.photobucket.com/albums/bb455/IPenna/Untitled-1_zpsd8ub2vn9.png"></a>
    </div>


@endsection
<style>
    .left-column {
        float: left;
        width: 20%;
        padding: 5px 15px;
        background-image: url("http://s1206.photobucket.com/user/IPenna/media/cacks_zps94vgmohx.png.html");
    }
    .right-column{
        float: left;
        width: 20%;
        padding: 5px 15px;
    }
    .center-column{
        width: 59%;
        float: left;
        padding: 5px 15px;
        margin: 0px 5px 5px 5px;
        text-align: center;
    }
    .body{
        width: auto;
    }
    .header{
        color: whitesmoke;
    }
    .text{
        color: whitesmoke;
    }
    b{
        color: #0077fb;
    }
</style>