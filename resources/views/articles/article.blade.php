@extends('master')
@section('content')

    <div id="content">
        <h1 class="header">{{ $article->title  }}</h1>
        <h3 class="header">Written By: {{ $article->user->username }}</h3>
        <hr></hr>
        <div class="text">
            {{ $article->body }}
        </div>
        <div id="tags">
        @unless ($article->tags->isEmpty())
            <Ul>
                @foreach($article->tags as $tag)
                    <li>
                        {{ $tag->name }}
                    </li>
                @endforeach
            </Ul>
        @endunless
    </div></div>
    <br>

    <div id="comment">
        @foreach ($comments as $comment)
            {{ $comment->username }}:
            {{ $comment->body }}<br>
        @endforeach
    </div>
    <br>
    {!! Form::open(['action' => ['ArticleController@reply', $article->id]]) !!}
    <input type="hidden" name="_token" value="{{ csrf_token() }}">

    <div class="group">
        {!! Form::text('body', null, ['class' => 'form-control', 'placeholder' => "Post a Comment.."]) !!}
    </div>
<br>
    <div class="group">
        {!! Form::submit('Add Comment', ['class' => 'btn btn-primary form-control']) !!}
    </div>
    {!! Form::close() !!}
    <br><br>
    @can('update', $article)
    <div class="group">
        {!! Form::model($article, ['method' => 'GET', 'action' => ['ArticleController@edit', $article->id]]) !!}
        {!! Form::submit('Edit Article', ['class' => 'btn btn-primary form-control']) !!}
        {!! Form::close() !!}
        @endcan
        @can('destroy', $article)
        {!! Form::model($article, ['method' => 'DELETE', 'action' => ['ArticleController@destroy', $article->id]]) !!}
        {!! Form::submit('Delete Article', ['class' => 'btn btn-primary form-control']) !!}
        {!! Form::close() !!}
    </div>
    @endcan
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
        margin-left: 100px;
        margin-right: 100px;
    }
    #tags {
        text-align: left;
        color: whitesmoke;
    }
    .group{
        margin-right: 30%;
        margin-left: 30%;
        font-family: Tahoma, Geneva, sans-serif;
        font-size: 14px;
        font-style: italic;
        line-height: 24px;
        font-weight: bold;
        color: whitesmoke;
    }
    .text{
        color: whitesmoke;
    }
    .header{
        color: whitesmoke;
    }
    #comment{
        color: whitesmoke;
        text-align:center;
    }
</style>