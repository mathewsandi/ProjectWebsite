@extends('master')

<html>
    <head>
        <title>Admin Panel</title>
        <meta name="_token" content="{!! csrf_token() !!}"/>
    </head>

    @section('content')
        <div class="col-md-8">
            <h2 style="text-align: center;">User Records</h2>
            <p style="text-align:  center;">{{$userCount . " records found"}}</p><br>
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
        </div>
        <div class="col-md-4">
            <section id="data_section" class="controls">
            <ul class="admin-controls">
                <li><img src="http://www.psdgraphics.com/file/blue-add-button.jpg" width="94px" onClick="show_form('roles_update');"/> Update User Roles</li>
                <li><img src="http://www.psdgraphics.com/file/blue-add-button.jpg" width="94px" onClick="show_form('roles_create');"/> Create a Role</li>
                <li><img src="http://www.psdgraphics.com/file/blue-add-button.jpg" width="94px" onClick="show_form('roles_perms');"/> Update Roles Permissions</li>
                <li><img src="http://www.psdgraphics.com/file/blue-add-button.jpg" width="94px" onClick="show_form('perms_create');"/> Create a Permission</li>
            </ul>
            </section>

            <section id="form_section">

                <form id="roles_update" class="controls" style="display:none">
                    <input id="user_name" type="text" name="user" placeholder="Enter a user name" value=""/>
                    <input id="role_name" type="text" name="role" placeholder="Enter a role name" value=""/>
                    <button name="submit">Update User</button>
                </form>

                <form id="edit_task" class="todo" style="display:none">
                    <input id="edit_task_id" type="hidden" value=""/>
                    <input id="edit_task_title" type="text" name="title" value=""/>
                    <button name="submit">Edit Task</button>
                </form>

            </section>
        </div>

    @stop

    <script src="http://code.jquery.com/jquery-latest.min.js"type="text/javascript"></script>
    <script src="/js/admin.js"type="text/javascript"></script>
</html>