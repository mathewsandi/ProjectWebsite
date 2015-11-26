@extends('master')
@section('content')

    <div id="content">
        <h1>{{ $article->title  }}</h1>
        <h3>Written By: {{ $article->user->username }}</h3>
        <hr></hr>
        <div class="body">
            {{ $article->body }}
        </div>
    </div>
@endsection

<style>
    #content{
        text-align: center;
        margin-left: 100px;
        margin-right: 100px;
    }
</style>