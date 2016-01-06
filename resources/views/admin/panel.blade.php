@extends('master')

@section('content')

    <h2 style="text-align: center;">User Records</h2>
    <p style="text-align:center;">{{$userCount . " records found"}}</p><br>

    @if(count($users) != 0)
        <table class="table" cellspacing="5" id="users">
            <thead>
                <tr>
                    <th>Username:</th>
                    <th>Email:</th>
                    <th>Active:</th>
                    <th>User Since:</th>
                    <th>Last Login:</th>
                </tr>
            </thead>
        <tbody>
            @foreach($users as $user)
                <?php
                        if($user->active == '1')
                            $status = "Active";
                        else
                            $status = "Disabled";
                        ?>
                <tr>
                    <td>{{$user->username}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$status}}</td>
                    <td>{{$user->created_at}}</td>
                    <td>{{$user->updated_at}}</td>

                    @if($status == "Active")
                        <td>
                            {!! Form::open(array('route' => array('admin.destroy', $user->id),
                            'method' => 'DELETE',
                            'stye' => 'display:inline')) !!}

                            {!! Form::button('Disable', array('class'=>'btn btn-danger',
                            'data-toggle'=>'modal',
                            'data-target'=>'#confirmDelete',
                            'data-title'=>'Disable User',
                            'data-message'=>'Are you sure you want to disable this user account',
                            'data-btncancel'=>'btn-default',
                            'data-btnaction'=>'btn-danger',
                            'data-btntxt'=>'Disable')) !!}
                        </td>
                    @else
                        <td>
                            {!! Form::open(array('route' => array('admin.update', $user->id),
                            'method' => 'PATCH',
                            'stye' => 'display:inline')) !!}

                            {!! Form::button('Enable', array('class'=>'btn btn-danger',
                            'data-toggle'=>'modal',
                            'data-target'=>'#confirmDelete',
                            'data-title'=>'Enable User',
                            'data-message'=>'Are you sure you want to enable this user account',
                            'data-btncancel'=>'btn-default',
                            'data-btnaction'=>'btn-success',
                            'data-btntxt'=>'Enable')) !!}
                        </td>
                    @endif
                </tr>
            @endforeach
        </tbody>
        </table>
        @include('partials.modal_confirm')

    @else
        <h3 style="text-align:center;">No user records found.</h3>
    @endif


@stop