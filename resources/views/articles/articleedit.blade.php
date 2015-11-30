@extends('master')

@section('content')
    <div id="content">
    <h1>Edit: {!! $article->title !!}</h1>

    <hr/>
    <br><br><br><br><br>
    </div>

    {!! Form::model($article, ['method' => 'PATCH', 'action' => ['ArticleController@update', $article->id]]) !!}

    <div class="group">
        {!! Form::label('title', 'Title:') !!}
        {!! Form::text('title', null, ['class' => 'form-control']) !!}
    </div>

    <div class="group">
        {!! Form::label('body', 'Body:') !!}
        {!! Form::textarea('body', null, ['class' => 'form-control']) !!}
    </div>

    <div class="group">
        {!! Form::label('published_at', 'Publish On:') !!}
        {!! Form::input('date', 'published_at', $article->published_at->format('Y-m-d'), ['class' => 'form-control']) !!}
    </div>

    <div class="group">
        {!! Form::label('tag_list', 'Tags:') !!}
        {!! Form::select('tag_list[]', $tags, null, ['id' => 'tag_list', 'class' => 'form-control', 'multiple']) !!}
    </div>

    <div class="group">
        {!! Form::submit('Edit Article', ['class' => 'btn btn-primary form-control']) !!}
    </div>
    {!! Form::close() !!}
    @include('errors.list')

@section('scripts')
    <script>
        $("#tag_list").select2();
    </script>
@endsection
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
        color: red;
    }
</style>