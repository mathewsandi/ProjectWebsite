@extends ('master')

@section('content')

    <div id="content">
        <div class="col-md-12 col-sm-12">
            <div id="pic">
                <img src="http://i1206.photobucket.com/albums/bb455/IPenna/1_zpsdvddkr4h.png">
            </div>
            <div id="pic1">
                <img src="http://i1206.photobucket.com/albums/bb455/IPenna/2_zpsbic8cthm.png">
            </div>
            <h1 class="header">{{$user->username}}'s Profile!</h1>
            @foreach ($roles as $role)
                <img src="{{$role->display_name}}"/>
            @endforeach
            <br><br>
            @if (Auth::check())

                <img src="{{ Gravatar::get($user->email) }}" style="height:150px; width:150px; border-radius:100%;"><br>
            @endif
            <br>
            <b>
            </b>

            <hr/>
            <br>

            <b>
                Username:
            </b> <div class="text">{{$user->username}}</div>
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
        </div>
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
    .header{
        color: whitesmoke;
    }
    b{
        color: whitesmoke;
    }
    #pic{
        position: absolute;
        bottom: 62%;
        left: 30%;
    }
    #pic1{
        position: absolute;
        bottom: 62%;
        left: 60%;
    }
    .form-group{
        width: 150px;
        position:absolute;
        left:46%;
    }
</style>