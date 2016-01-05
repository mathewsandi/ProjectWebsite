@extends('master')

@section('content')
<br>

    <div id="left">
        @foreach (Auth::user()->friends as $friend)
                <a href="{{ action('ProfileController@show', [$friend->id]) }}"><img class="media-object img-circle gravatar" src="{{ Gravatar::get($friend->email, ['size'=> 70]) }}" alt="{{ $friend->username }}"></a>
                <a class="link" href="{{ action('ProfileController@getRemoveFriend', [$friend->id]) }}">Unfollow {{$friend->username}}</a>
        @endforeach
        @foreach ($not_friends as $friend)
                <a href="{{ action('ProfileController@show', [$friend->id]) }}"> <img class="media-object img-circle gravatar" src="{{ Gravatar::get($friend->email, ['size'=> 70]) }}" alt="{{ $friend->username }}"></a>
                <a class="link" href="{{ action('ProfileController@getAddFriend', [$friend->id]) }}">Follow {{$friend->username}}</a>
        @endforeach
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
    #left a {
        display: inline-block;
    }
    #left{
        padding-left:5%;
    }
    .gravatar{
        margin:1px;
    }
</style>