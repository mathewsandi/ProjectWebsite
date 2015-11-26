@extends('master')

@section('content')

    <div id="content">
        <b>
            Username:
        </b> {{ $username }}

        <br>

        <b>
            Email:
        </b> {{ $email }}

        <br>

        <b>
            Articles:
        </b> {{ $articlecount }} <a href="/profilearticles" class="btn btn-info" role="button">View Articles!</a>

        <br>

        <br>
        {!! Form::model($user, ['method' => 'PATCH', 'action' => ['ProfileController@update', $user_id]]) !!}
        <div class="form-group">
            {!! Form::label('username', 'Username:') !!}
            {!! Form::text('username', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('email', 'Email:') !!}
            {!! Form::email('email', null, ['class' => 'form-control']) !!}
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