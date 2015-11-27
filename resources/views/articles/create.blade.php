@extends('master')

@section('content')

    <div id="content">
        <h1>Write a new Article</h1>
        <hr/>
    </div>
    <div class="form-group">
    {!! Form::open(['route' => 'articles.store']) !!}
        @include('partials.form', ['submitButton' => 'Add Article'])
    {!! Form::close() !!}
    </div>
@endsection

        <style>
            #content{
                text-align: center;
                padding: 10px;
                margin-left: 100px;
                margin-right: 100px;
            }
            .form-group{
                margin-right: 100px;
                margin-left: 100px;
                font-family: Tahoma, Geneva, sans-serif;
                font-size: 14px;
                font-style: italic;
                line-height: 24px;
                font-weight: bold;
                color: red;
            }

        </style>