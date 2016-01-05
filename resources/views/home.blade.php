@extends ('master')

@section('content')
    <div class="body">
    <h1 class="header" style="text-align: center">Welcome to the home page!</h1>
        <br>

    <div class="left-column">
        <h4 class="box"><b>Twitter Feed:</b></h4>
        <a class="twitter-timeline" href="https://twitter.com/SezgiCraft" data-widget-id="673981711718436865">Tweets by @SezgiCraft</a>
        <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
        <br>
        <h4 class="box"><b>Instagram Feed:</b></h4>
        <script src="http://snapwidget.com/js/snapwidget.js"></script>
        <iframe src="http://snapwidget.com/in/?u=cGVubmFkc2dufGlufDE3MHwyfDN8fHllc3w1fGZhZGVJbnxvblN0YXJ0fHllc3x5ZXM=&ve=091215" title="Instagram Widget" class="snapwidget-widget" allowTransparency="true" frameborder="0" scrolling="no" style="border:none; overflow:hidden; width:100%;"></iframe>
        <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <!-- AD -->
        <ins class="adsbygoogle"
             style="display:block"
             data-ad-client="ca-pub-3826193532697061"
             data-ad-slot="2582655037"
             data-ad-format="auto"></ins>
        <script>
            (adsbygoogle = window.adsbygoogle || []).push({});
        </script>
    </div>

        <div class="center-column">
            <h4 class="box">
                <b>
                    Latest News!
                </b>
            </h4>
            @foreach($articles as $article)
                <article>
                    <h2>
                        <b><a href="{{ action('ArticleController@show', [$article->id]) }}" style="text-decoration: none; color: #0077fb;">{{ $article->title }}</a></b>
                    </h2>

                    <div class="text">{{ $article->body }}</div>

                </article>
            @endforeach
        </div>

    <div class="right-column">
        <h4 class="box"><b>Latest Users: </b></h4>
        @foreach ($latestUsers as $latestUser)
            <div class="text1"><li>
                {{ $latestUser->username }}
            </li></div>
        @endforeach
        <br>
        <h4 class="box"><b>Recent Online Users:</b></h4>
        @foreach ($recentUsers as $recentUser)
            <div class="text1"><li>
                {{ $recentUser->username }}:</div></li>
            <div class="text">{{ $recentUser->updated_at->diffForHumans() }}</div>

        @endforeach
        <br>
        <a href="http://paypal.me/Mathew858"> <img src="http://i1206.photobucket.com/albums/bb455/IPenna/donate_zpsxli6ltva.png" style="width: 155px;"></a>
        <br>
        <a href="http://www.twitter.com/PennaDSGN"> <img src="http://i1206.photobucket.com/albums/bb455/IPenna/twitter_zpsuvsmnsao.png"></a>
        <a href="http://www.instagram.com/PennaDSGN"><img src="http://i1206.photobucket.com/albums/bb455/IPenna/insta_zps3kusskop.png"></a>
    </div>

        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

            ga('create', 'UA-71831538-1', 'auto');
            ga('send', 'pageview');

        </script>
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
    .text1{
        color:#0077fb;
    }
    b{
        color: whitesmoke;
    }
    .box {
        height: 75px;
        padding: 28px;
        text-align: center;
        margin-bottom: 1em;
        background-image: url("http://i1206.photobucket.com/albums/bb455/IPenna/Untitled-2lll_zpslz4u6fac.png");
        background-color: inherit;
        background-repeat: no-repeat;
        background-size: cover;
        -webkit-box-shadow: 0 10px 6px -6px #000000;
        -moz-box-shadow: 0 10px 6px -6px #000000;
        box-shadow: 0 10px 6px -6px #000000;
    }
</style>