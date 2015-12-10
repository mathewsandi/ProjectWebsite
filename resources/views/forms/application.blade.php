@extends('master')

@section('content')
    <div class="group">
        {!! Form::open(['action' => 'UserController@apply']) !!}
        <div class="form-group">
            {!! Form::label('name', 'Name:') !!}
            {!! Form::text('name', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('age', 'Age:') !!}
            {!! Form::text('age', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('email', 'Email:') !!}
            {!! Form::text('email', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('position', 'Position You Are Applying For:') !!}
            {!! Form::text('position', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('experience', 'Previous Experience:') !!}
            {!! Form::textarea('experience', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('why', 'Why Do You Want The Position:') !!}
            {!! Form::textarea('why', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('what', 'What Can You Bring To Sezgi?:') !!}
            {!! Form::textarea('what', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Send Application', ['class' => 'btn btn-primary form-control']) !!}
        </div>
        {!! Form::close() !!}
        @include('errors.list')
    </div>
@stop

<style>
    .group{
        margin-right: 300px;
        margin-left: 300px;
        font-family: Tahoma, Geneva, sans-serif;
        font-size: 14px;
        font-style: italic;
        line-height: 24px;
        font-weight: bold;
        color: whitesmoke;
    }
</style>