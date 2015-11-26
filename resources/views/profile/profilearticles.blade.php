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
            <h2> {{ $article->title }}</h2>

            <p>{{ $article->body }}</p>
        @endforeach
    </div>

@endsection