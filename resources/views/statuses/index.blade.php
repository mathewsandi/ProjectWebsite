@extends('master')

@section('content')
<br><br>
    <div class="body">

        @include('errors.list')
            <div class="status">
                {!! Form::open(['route' => 'statuses.store']) !!}
                <div class="form-group">
                    {!! Form::textarea('body', null, ['class' => 'form-control', 'rows' => '3', 'placeholder' => "Give us an update!"]) !!}
                </div>

                <div class="form-group">
                    {!! Form::submit('Post Status', ['btn btn-primary', 'class' => 'form-control']) !!}
                </div>
                {!!  Form::close() !!}
            </div>
        <div class="col-md-3 posts">
            <div id="text">
                <b><p>{{$status_count}}<br/> Posts!</p></b>
            </div>

        </div>

        <div class="col-md-6 col-md-offset-3 statuses">
        @foreach($statuses as $status)
            @include('partials.statuses')
        @endforeach
            {!! $statuses->render() !!}
        </div>
    </div>
@stop

<style>
    .status{
        margin-right: 30%;
        margin-left: 30%;
        font-family: Tahoma, Geneva, sans-serif;
        font-size: 14px;
        font-style: italic;
        line-height: 24px;
        font-weight: bold;
        color: red;
    }
    .posts{
        top: -175px;
        text-align: center;
        padding: 1em;
        margin-left: 5px;
        height: 40%;
        background-image: url("http://i1206.photobucket.com/albums/bb455/IPenna/Untitled-1_zpsnw4qcdqu.png");
        background-repeat: no-repeat;
        position: relative;
        text-align: center;
    }

    #text{
        bottom: 18%;
        position: absolute;
        font-size:60px;
        font-style: oblique;
        left: 28%;
        color: whitesmoke;
        font-family: "Gill Sans MT";
        color: #000000;
    }
    .statuses{
        margin-top: -18%;
    }
</style>