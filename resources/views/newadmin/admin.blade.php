@extends('master')

<html>
    <head>
        <title>Admin Panel</title>
        <meta name="_token" content="{!! csrf_token() !!}"/>
    </head>

    @section('content')

        <h2 style="text-align: center;">User Records</h2>
        <p style="text-align:center;">{{$userCount . " records found"}}</p><br>
        <div class="container">
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
                    <tbody id="user_list">
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
                                <td class="disable">
                                    <a href="#" id="disable_user_id" onClick="disable_user('{{$user->id}}');" class="btn btn-danger">Disable</a>
                                </td>
                            @else
                                <td class="enable">
                                    <a href="#" id="enable_user_id" onClick="enable_user('{{$user->id}}');" class="btn btn-success">Enable</a>
                                </td>
                            @endif
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            @else
                <h3 style="text-align:center;">No user records found.</h3>
            @endif
        </div>

    @stop

    <script src="http://code.jquery.com/jquery-latest.min.js"type="text/javascript"></script>
    <script src="/js/admin.js"type="text/javascript"></script>
</html>