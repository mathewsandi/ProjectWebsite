@extends('master')

@section('content')

    <div class="col-md-12">
        <div class="col-md-3">
            <div class="group">
                {!! Form::open(['action' => 'AdminController@createRole']) !!}
                <div class="form-group">
                    {!! Form::label('name', 'Role Name:') !!}
                    {!! Form::text('name', null, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('display_name', 'Display Name:') !!}
                    {!! Form::text('display_name', null, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('description', 'Role Description:') !!}
                    {!! Form::text('description', null, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::submit('Create Role', ['class' => 'btn btn-primary form-control']) !!}
                </div>
                {!! Form::close() !!}
            </div>
        </div>
        <div class="col-md-3">
            <div class="group">
                {!! Form::open(['action' => 'AdminController@createPermission']) !!}
                <div class="form-group">
                    {!! Form::label('name', 'Permission Name:') !!}
                    {!! Form::text('name', null, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('display_name', 'Display Name:') !!}
                    {!! Form::text('display_name', null, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('description', 'Permission Description:') !!}
                    {!! Form::text('description', null, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::submit('Create Permission', ['class' => 'btn btn-primary form-control']) !!}
                </div>
                {!! Form::close() !!}
            </div>
        </div>
        <div class="col-md-3">
            <div class="group">
                {!! Form::open(['action' => 'AdminController@createTag']) !!}
                <div class="form-group">
                    {!! Form::label('name', 'Tag Name:') !!}
                    {!! Form::text('name', null, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::submit('Create Tag', ['class' => 'btn btn-primary form-control']) !!}
                </div>
                {!! Form::close() !!}
            </div>
        </div>
        <div class="col-md-3">
            <div class="group">
                {!! Form::open(['action' => 'AdminController@editUser']) !!}
                <div class="form-group">
                    {!! Form::label('username', 'Username:') !!}
                    {!! Form::text('username', null, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('name', 'Role Name:') !!}
                    {!! Form::text('name', null, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::submit('Update User', ['class' => 'btn btn-primary form-control']) !!}
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
    <div id="errors">
        @include('errors.list')
    </div>


@endsection

<style>
    #errors{
        position: absolute;
        top:50%;
        width: 500px;
        text-align: center;
        left:35%;
    }
</style>