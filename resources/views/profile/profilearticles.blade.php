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
        </b><div class="text"> {{ $username }} <br></div>

        <b>
            Email:
        </b><div class="text"> {{ $email }} <br></div>

        <b>
            Articles:
        </b>
        @foreach($articles as $article)
            <article>
                <h2>
                    <a href="{{ action('ArticleController@show', [$article->id]) }}">{{ $article->title }}</a>
                </h2>

                <p><div class="text">{{ $article->body }}</p></div>
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
    .text{
        color: whitesmoke;
    }
</style>