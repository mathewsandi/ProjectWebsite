@extends('master')

@section('content')

    <div id="content" style="text-align: center">
        <h1 class="header">Articles</h1>

        <hr></hr>


        <div class="col-lg-12" id="search-results">
            @foreach($articles as $article)
                <article>
                    <h2>
                        <a href="{{ action('ArticleController@show', [$article->id]) }}" style="text-decoration: none; color: #0077fb;">{{ $article->title }}</a>
                    </h2>

                    <p><div class="text">{{ $article->body }}</p></div>
                    </article>
            @endforeach

        {!!  $articles->render() !!}
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
    #content{
        margin-left: 100px;
        margin-right: 100px;
    }
    .text{
        color: whitesmoke;
    }
    .header{
        color: whitesmoke;
    }
</style>