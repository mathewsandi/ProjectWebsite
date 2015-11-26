@extends('master')

@section('content')

    <div id="content" style="text-align: center">
        <h1>Articles</h1>

        <hr></hr>
        @foreach($articles as $article)
            <article>
                <h2>
                    <a href="{{ action('ArticleController@show', [$article->id]) }}">{{ $article->title }}</a>
                </h2>

                <p>{{ $article->body }}</p>
            </article>
        @endforeach

        {!!  $articles->render() !!}
    </div>


@endsection
<style>
    #content{
        margin-left: 100px;
        margin-right: 100px;
    }
</style>