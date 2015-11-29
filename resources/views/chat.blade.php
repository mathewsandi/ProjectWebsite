@extends('master')

@section('content')

    <div id="chat">
        @if (Auth::check())

            <li> <img src="{{ Gravatar::get(Auth::user()->email) }}" style="height:150px; width:150px; border-radius:100%;"> </li>

        @endif
        

    </div>


@endsection