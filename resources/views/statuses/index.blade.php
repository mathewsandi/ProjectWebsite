@extends('master')

@section('content')

    @include('errors.list')

    <div class="col-md-3 col-sm-3 posts">
        <div id="posts">
            <img src="http://i1206.photobucket.com/albums/bb455/IPenna/Untitled-1_zpsnw4qcdqu.png"/>
        </div>
        <div id="text">
            <b><p>{{$status_count}}<br/> Posts!</p></b>
        </div>
    </div>

    <div class="col-md-6 col-sm-6 statuses">
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
        @foreach($statuses as $status)
            @include('partials.statuses')
        @endforeach
        {!! $statuses->render() !!}
    </div>
@stop

<style>
    .statuses{
        font-family: Tahoma, Geneva, sans-serif;
        font-size: 14px;
        line-height: 24px;
    }
    #posts{
        position: absolute;
    }
    #text{
        font-size:60px;
        font-style: oblique;
        font-family: "Gill Sans MT";
        color: #000000;
        text-align: center;
        position: absolute;
        left: 130px;
        top: 80px;
    }
</style>