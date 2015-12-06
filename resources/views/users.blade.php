@extends('master')

@section('content')
<br>
    <div class="rows">
        @foreach (Auth::user()->friends as $friend)
            <tr>
                <td><a href="{{ action('ProfileController@show', [$friend->id]) }}"><img class="media-object img-circle gravatar" src="{{ Gravatar::get($friend->email, ['size'=> 70]) }}" alt="{{ $friend->username }}"></a></td>
                <td><a href="{{ action('ProfileController@getRemoveFriend', [$friend->id]) }}">Unfollow {{$friend->username}}</a></td>
            </tr>
        @endforeach


<br><br><br><br><br>

    @foreach ($not_friends as $friend)
        <tr>
            <td><a href="{{ action('ProfileController@show', [$friend->id]) }}"> <img class="media-object img-circle gravatar" src="{{ Gravatar::get($friend->email, ['size'=> 70]) }}" alt="{{ $friend->username }}"></a></td>
            <td><a href="{{ action('ProfileController@getAddFriend', [$friend->id]) }}">Follow {{$friend->username}}</a></td>
        </tr>
        @endforeach
        </div>
@endsection

<style>
    .rows {
        text-align: center;
        color: #0077fb;
    }
    .gravatar{
        margin: auto;
    }
</style>