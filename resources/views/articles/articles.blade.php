@extends('master')

@section('content')

    <div id="content" style="text-align: center">
        <h1 class="header">Articles</h1>

        <hr></hr>
        @foreach($articles as $article)
            <article>
                <h2>
                    <a href="{{ action('ArticleController@show', [$article->id]) }}" style="text-decoration: none; color: #0077fb;">{{ $article->title }}</a>
                </h2>

                <p><div class="text">{{ $article->body }}</p></div>
            </article>
        @endforeach

        {!!  $articles->render() !!}



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