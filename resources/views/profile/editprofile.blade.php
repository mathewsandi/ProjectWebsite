@extends('master')

@section('content')
    <div id="content">
    {!! Form::model($user, ['method' => 'PATCH', 'action' => ['ProfileController@update', $user_id]]) !!}
    <div class="group">
        {!! Form::label('username', 'Username:') !!}
        {!! Form::text('username', null, ['class' => 'form-control']) !!}
    </div>

    <div class="group">
        {!! Form::label('email', 'Email:') !!}
        {!! Form::email('email', null, ['class' => 'form-control']) !!}
    </div>

    <div class="group">
        {!! Form::label('location', 'Location:') !!}
        {!! Form::text('location', null, ['class' => 'form-control']) !!}
    </div>

    <div class="group">
        {!! Form::label('minecraft', 'Minecraft:') !!}
        {!! Form::text('minecraft', null, ['class' => 'form-control']) !!}
    </div>

    <div class="group">
        {!! Form::label('youtube', 'Youtube:') !!}
        {!! Form::text('youtube', null, ['class' => 'form-control']) !!}
    </div>

    <div class="group">
        {!! Form::label('twitch', 'Twitch:') !!}
        {!! Form::text('twitch', null, ['class' => 'form-control']) !!}
    </div>

    <div class="group">
        {!! Form::label('skype', 'Skype:') !!}
        {!! Form::text('skype', null, ['class' => 'form-control']) !!}
    </div>

    <div class="group">
        {!! Form::label('about', 'About You:') !!}
        {!! Form::textarea('about', null, ['class' => 'form-control']) !!}
    </div>

    {!! Form::submit('Update Profile', ['class' => 'btn btn-primary']) !!}
    {!! Form::close() !!}
    </div>
    @include('errors.list')
@endsection

<style>
    #content{
        text-align: center;
        padding: 10px;
        margin: 10px;
    }
    .group{
        margin-right: 20%;
        margin-left: 20%;
        font-family: Tahoma, Geneva, sans-serif;
        font-size: 14px;
        font-style: italic;
        line-height: 24px;
        font-weight: bold;
        color: red;
    }

</style>