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
        <br>
        <h4><b>Instagram Feed:</b></h4>
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
        <h4><b>Online Users:</b></h4>
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
        width: 250px;
        padding: 5px 15px;
        margin-left: 10px;
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
        width: 250px;
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
        width: 1390px;
        float: left;
        padding: 5px 15px;
        margin: 0px 5px 5px 5px;
        text-align: center;
    }
</style>