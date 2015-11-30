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

        <div class="col-md-6 col-md-offset-3">
        @foreach($statuses as $status)
            @include('partials.statuses')
        @endforeach
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
</style>