@extends('master')

@section('content')

    <div id="content">
        <div class="group">
            {!! Form::open(['route' => 'admin.store']) !!}
            <div class="group">
                {!! Form::label('username', 'Username:') !!}
                {!! Form::text('username', null, ['class' => 'form-control']) !!}
            </div>

            <div class="group">
                {!! Form::label('role', 'Role:') !!}
                {!! Form::text('role', null, ['class' => 'form-control']) !!}
            </div>

            <div class="group">
                {!! Form::submit("Update Roles" , ['class' => 'btn btn-primary form-control']) !!}
            </div>
                {!! Form::close() !!}
        </div>
    </div>

@endsection

<style>
    #content{
        text-align: center;
        padding: 10px;
        margin: 10px;
    }
    .group{
        margin-right: 600px;
        font-family: Tahoma, Geneva, sans-serif;
        font-size: 14px;
        font-style: italic;
        line-height: 24px;
        font-weight: bold;
        color: red;
    }

</style>