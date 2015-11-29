@extends('master')

@section('content')

<br>
    <div class="content">
        @if (count($articles) === 0)
            <b>
                No Articles Found.
            </b>
        @elseif (count($articles) >= 1)
            @foreach($articles as $article)
                <article>
                    <h2>
                        <a href="{{ action('ArticleController@show', [$article->id]) }}">{{ $article->title }}</a>
                    </h2>

                    <p><div class="text">{{ $article->body }}</p></div>
                </article>
            @endforeach
        @endif
    </div>


@stop

<style>
    .content{
        text-align: center;
    }
</style>