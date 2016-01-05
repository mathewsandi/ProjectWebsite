@extends('master')

@section('content')

    <div id="content">
        <h2>{{$name}}<br></h2>
        {{$info}}<br>
        <a href="{{ $price }}">  <img src="{{$url}}"></a><br>
    </div>
@stop

<style>
    #content{
        text-align: center;
        color: whitesmoke;
    }
</style>