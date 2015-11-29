@extends('master')

@section('content')
    <div id="content">
    {!! Form::model($user, ['method' => 'PATCH', 'action' => ['ProfileController@update', $user_id]]) !!}
    <div class="form-group">
        {!! Form::label('username', 'Username:') !!}
        {!! Form::text('username', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('email', 'Email:') !!}
        {!! Form::email('email', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('location', 'Location:') !!}
        {!! Form::text('location', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('minecraft', 'Minecraft:') !!}
        {!! Form::text('minecraft', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('youtube', 'Youtube:') !!}
        {!! Form::text('youtube', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('twitch', 'Twitch:') !!}
        {!! Form::text('twitch', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('skype', 'Skype:') !!}
        {!! Form::text('skype', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('about', 'About You:') !!}
        {!! Form::textarea('about', null, ['class' => 'form-control']) !!}
    </div>

    {!! Form::submit('Update Profile', ['class' => 'btn btn-primary']) !!}
    {!! Form::close() !!}
    </div>
@endsection

<style>
    #content{
        text-align: center;
        padding: 10px;
        margin: 10px;
    }
    .form-group{
        margin-right: 300px;
        margin-left: 300px;
        font-family: Tahoma, Geneva, sans-serif;
        font-size: 14px;
        font-style: italic;
        line-height: 24px;
        font-weight: bold;
        color: red;
    }

</style>