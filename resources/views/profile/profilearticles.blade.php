@extends('master')

@section('content')

    <div id="content">
        <h1>
            {{ $username }}'s Articles!
        </h1>
        <hr></hr>
        <br>

        <b>
            Username:
        </b> {{ $username }} <br>

        <b>
            Email:
        </b> {{ $email }} <br>

        <b>
            Articles:
        </b>
        @foreach($articles as $article)
            <article>
                <h2>
                    <a href="{{ action('ArticleController@show', [$article->id]) }}">{{ $article->title }}</a>
                </h2>

                <p>{{ $article->body }}</p>
            </article>
        @endforeach
    </div>

@endsection

<style>
    #content{
        margin-left: 100px;
        margin-right: 100px;
        text-align: center;
    }
</style>