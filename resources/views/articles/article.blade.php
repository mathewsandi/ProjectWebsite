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
    @can('update', $article)
    <div class="group">
    {!! Form::model($article, ['method' => 'GET', 'action' => ['ArticleController@edit', $article->id]]) !!}
    {!! Form::submit('Edit Article', ['class' => 'btn btn-primary form-control']) !!}
    {!! Form::close() !!}
    <br>
    @endcan
    @can('destroy', $article)
    {!! Form::model($article, ['method' => 'DELETE', 'action' => ['ArticleController@destroy', $article->id]]) !!}
    {!! Form::submit('Delete Article', ['class' => 'btn btn-primary form-control']) !!}
    {!! Form::close() !!}
    </div>
    @endcan
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
</style>