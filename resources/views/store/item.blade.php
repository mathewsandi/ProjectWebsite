@extends('master')

@section('content')

    <div id="content">
        <h2>{{$name}}<br></h2>
        {{$info}}<br>
        {{ $price }}<br>
        <img src="{{$url}}"><br>
    </div>
@stop

<style>
    #content{
        text-align: center;
    }
</style>