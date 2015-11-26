@extends ('master')

@section('content')

    <div id="content">
        <h1>{{$user->username}}'s Profile!</h1>
        <hr/>
        <br>

        <b>
            Username:
        </b> {{$user->username}}
        <br>

        <b>
            Email:
        </b> {{$user->email}}
        <br>

        <b>
            Articles:
        </b>
        @foreach ($articles as $article)
            <h2> {{ $article->title }}</h2>

            <p>{{ $article->body }}</p>
        @endforeach
    </div>

@endsection
<style>
    #content{
        text-align: center;
        padding: 10px;
        margin: 10px;
    }
</style>