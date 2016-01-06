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
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-71831538-1', 'auto');
        ga('send', 'pageview');

    </script>

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