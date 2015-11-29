@extends('master')

@section('content')

    <div id="content">
        @if (Auth::check())

            <img src="{{ Gravatar::get(Auth::user()->email) }}" style="height:150px; width:150px; border-radius:100%;">

        @endif
        <br><br>
            <b>
            </b> <a href="/editprofile" class="btn btn-info" role="button">Edit Profile!</a>
        <br><br>

        <b>
            Articles:
        </b> {{ $articlecount }} <a href="/profilearticles" class="btn btn-info" role="button">View Articles!</a><br><br>

        <b>
            Username:
        </b><div class="text">{{ $username }}<br></div>

        <br>

        <b>
            Email:
        </b><div class="text"> {{ $email }}<br></div>

        <br>

        <b>
            Location:
        </b> <div class="text">{{ $location }}<br></div>

            <br>

        <b>
            Minecraft:
        </b><div class="text"> {{ $minecraft }}<br></div>

            <br>

        <b>
            Youtube:
        </b><div class="text"> {{ $youtube }}<br></div>

            <br>

        <b>
            Twitch:
        </b> <div class="text">{{ $twitch }}<br></div>

            <br>

        <b>
            Skype:
        </b><div class="text"> {{ $skype }}<br></div>

            <br>

        <b>
            About:
        </b> <div class="text">{{ $about }}<br></div>

        <br>

        <br>
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