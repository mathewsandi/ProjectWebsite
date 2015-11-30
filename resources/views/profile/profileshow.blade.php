@extends ('master')

@section('content')

    <div id="content">
        <h1>{{$user->username}}'s Profile!</h1>
        @if (Auth::check())

            <img src="{{ Gravatar::get($user->email) }}" style="height:150px; width:150px; border-radius:100%;"><br>
        @endif
        <br>
        @include('partials.follow-form')
        <hr/>
        <br>

        <b>
            Username:
        </b> <div class="text">{{$user->username}}</div>
        <br>

        <b>
            Email:
        </b> <div class="text">{{$user->email}}</div>
        <br>

        <b>
            Location:
        </b> <div class="text">{{ $location }}<br></div>

        <br>

        <b>
            Minecraft:
        </b> <div class="text">{{ $minecraft }}<br></div>

        <br>

        <b>
            Youtube:
        </b> <div class="text">{{ $youtube }}<br></div>

        <br>

        <b>
            Twitch:
        </b> <div class="text">{{ $twitch }}<br></div>

        <br>

        <b>
            Skype:
        </b> <div class="text">{{ $skype }}<br></div>

        <br>

        <b>
            About:
        </b> <div class="text">{{ $about }}<br></div>

        <br>

        <b>
            Articles:
        </b>
        @foreach ($articles as $article)
            <h2> {{ $article->title }}</h2>

            <p><div class="text">{{ $article->body }}</p></div>
        @endforeach
    </div>

@endsection
<style>
    #content{
        text-align: center;
        padding: 10px;
        margin: 10px;
    }
    .text{
        color: whitesmoke;
    }
</style>