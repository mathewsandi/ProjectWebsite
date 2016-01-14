@extends('master')

@section('content')

    <div class="group">
    {!! Form::open(['route' => 'picture.store', 'files' => true]) !!}
        <div class="form-group">
            {!! Form::label('picture', 'Upload a picture') !!}
            {!! Form::file('test') !!}
        </div>
        <div class="form-group">
            {!! Form::submit('Upload Pic', ['class' => 'btn btn-primary form-control']) !!}
        </div>
    {!! Form::close() !!}
    </div>

    <div clas="container">
        {!! Html::image('images/'.$user->username.'/tn.jpg') !!}
    </div>

@stop