@extends('master')

@section('content')
<br>
    @foreach ($users->chunk(4) as $userSet)
        <div class="row users">
        @foreach ($userSet as $user)
            <div class="col-md-3 user-block">
                @include('partials.gravatar')
                <h4 class="user-block-username">
                    {{ $user->username }}
                </h4>
            </div>
        @endforeach
        </div>
    @endforeach

@endsection

<style>
    .users {
        margin-bottom: 3em;
    }
    .user-block{
        text-align: center;
    }
    .gravatar{
        margin: auto;
    }
</style>