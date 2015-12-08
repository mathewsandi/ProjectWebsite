@extends('master')

@section('content')
<br>

    <div id="left">
        @foreach (Auth::user()->friends as $friend)
                <a href="{{ action('ProfileController@show', [$friend->id]) }}"><img class="media-object img-circle gravatar" src="{{ Gravatar::get($friend->email, ['size'=> 70]) }}" alt="{{ $friend->username }}"></a>
                <a href="{{ action('ProfileController@getRemoveFriend', [$friend->id]) }}">Unfollow {{$friend->username}}</a>
        @endforeach
    </div>
    <div id="right">
        @foreach ($not_friends as $friend)
                <a href="{{ action('ProfileController@show', [$friend->id]) }}"> <img class="media-object img-circle gravatar" src="{{ Gravatar::get($friend->email, ['size'=> 70]) }}" alt="{{ $friend->username }}"></a>
                <a href="{{ action('ProfileController@getAddFriend', [$friend->id]) }}">Follow {{$friend->username}}</a>
        @endforeach
    </div>

@endsection

<style>
    #left {
        text-align: center;
    }
    #right {
        text-align: center;
    }
    .gravatar{
        margin: auto;
    }
</style>