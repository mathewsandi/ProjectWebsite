@extends('master')

@section('content')

    <div id="content">
        <h1 class="header">Write a new Article</h1>
        <hr/>
    </div>
    <div class="group">
    {!! Form::open(['route' => 'articles.store']) !!}
        @include('partials.form', ['submitButton' => 'Add Article'])
    {!! Form::close() !!}
    </div>
    @include('errors.list')
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-71831538-1', 'auto');
        ga('send', 'pageview');

    </script>
@endsection

        <style>
            #content{
                text-align: center;
                padding: 10px;
                margin-left: 100px;
                margin-right: 100px;
            }
            .group{
                margin-right: 100px;
                margin-left: 100px;
                font-family: Tahoma, Geneva, sans-serif;
                font-size: 14px;
                font-style: italic;
                line-height: 24px;
                font-weight: bold;
                color: whitesmoke;
            }
            .header{
                color: whitesmoke;
            }
        </style>