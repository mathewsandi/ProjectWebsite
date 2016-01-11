<br>
    <div class="group">
        {!! Form::open(['action' => 'UserController@apply']) !!}
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
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