<div id="form">
    <div class="group">
        {!! Form::open(['action' => 'UserController@video']) !!}
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="form-group">
            {!! Form::label('name', 'Name:') !!}
            {!! Form::text('name', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('email', 'Email:') !!}
            {!! Form::text('email', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('link', 'Link to your video:') !!}
            {!! Form::textarea('link', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('desc', 'Description of your video:') !!}
            {!! Form::textarea('desc', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Send Video', ['class' => 'btn btn-primary form-control']) !!}
        </div>
        {!! Form::close() !!}
        @include('errors.list')
</div>

    <style>
        .group{
            margin-right: 100px;
            margin-left: 100px;
            font-family: Tahoma, Geneva, sans-serif;
            font-size: 14px;
            font-style: italic;
            line-height: 24px;
            font-weight: bold;
            color: blue;
        }
    </style>