{!! Form::open(['route' => 'follows.store' ]) !!}
    {!! Form::hidden('userIdToFollow',$user->id ) !!}
    <button type="submit" class="btn btn-primary"> Follow {{ $user->username }}</button>

{!! Form::close() !!}