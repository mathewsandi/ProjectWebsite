@extends ('master')

@section('content')
    <div class="body">
    <h1 style="text-align: center">Welcome to the home page!</h1>
        <hr></hr>
        <br>

    <div class="left-column">
        <h4><b>Latest Forum Posts:</b></h4>
        <br>
        <h4><b>Twitter Feed:</b></h4>
        <a class="twitter-timeline" href="https://twitter.com/mathewj_" data-widget-id="670254159069884417">Tweets by @mathewj_</a>
        <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

        <br>
        <h4><b>Instagram Feed:</b></h4>
        <iframe src="http://widget.websta.me/in/mattjames_95/?r=1&w=3&h=3&b=1&p=5" allowtransparency="true" frameborder="0" scrolling="no" style="border:none;overflow:hidden;width:345px; height: 345px" ></iframe> <!-- websta - websta.me -->
    </div>

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

                    <div class="body">{{ $article->body }}</div>

                </article>
            @endforeach
        </div>

    <div class="right-column">
        <h4><b>Latest Users: </b></h4>
        @foreach ($latestUsers as $latestUser)
            <li>
                {{ $latestUser->username }}
            </li>
        @endforeach
        <br>
        <h4><b>Recent Online Users:</b></h4>
        @foreach ($recentUsers as $recentUser)
            <li>
                {{ $recentUser->username }}
            </li>
        @endforeach
        <br>
        <h4><b>Comment Box:</b></h4>
    </div>


    </div>

@endsection
<style>
    .left-column {
        -webkit-border-radius: 10px;
        -moz-border-radius: 10px;
        border-radius: 10px;
        border: 1px solid #FFFFFF;
        border: inset 1px solid #333;
        -webkit-box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.3);
        -moz-box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.3);
        box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.3);
        float: left;
        width: 20%;
        padding: 5px 15px;
    }
    .right-column{
        -webkit-border-radius: 10px;
        -moz-border-radius: 10px;
        border-radius: 10px;
        border: 1px solid #FFFFFF;
        border: inset 1px solid #333;
        -webkit-box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.3);
        -moz-box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.3);
        box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.3);
        float: left;
        width: 20%;
        padding: 5px 15px;
    }
    .center-column{
        -webkit-border-radius: 10px;
        -moz-border-radius: 10px;
        border-radius: 10px;
        border: 1px solid #FFFFFF;
        border: inset 1px solid #333;
        -webkit-box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.3);
        -moz-box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.3);
        box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.3);
        width: 59%;
        float: left;
        padding: 5px 15px;
        margin: 0px 5px 5px 5px;
        text-align: center;
    }
</style>