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
                <li><img src="http://www.psdgraphics.com/file/blue-add-button.jpg" width="94px" onClick="show_form('perm_create');"/> Create a Permission</li>
                <li><img src="http://www.psdgraphics.com/file/blue-add-button.jpg" width="94px" onClick="show_form('roles_perms');"/> Update Roles Permissions</li>
                <li><img src="http://www.psdgraphics.com/file/blue-add-button.jpg" width="94px" onClick="show_form('tag_create');"/> Create a Tag</li>
            </ul>
            </section>

            <section id="form_section">

                <form id="roles_update" class="controls" style="display:none">
                    <input id="username" type="text" name="username" placeholder="Enter a user name" value=""/>
                    <input id="rolename" type="text" name="rolename" placeholder="Enter a role name" value=""/>
                    <button name="submit">Update User</button>
                </form>

                <form id="roles_create" class="todo" style="display:none">
                    <input id="role_name" type="text" name="rolename" placeholder="Enter a role name" value=""/>
                    <input id="display_name" type="text" name="display_name" placeholder="Enter a display name" value=""/>
                    <input id="description" type="text" name="description" placeholder="Enter a description" value=""/>
                    <button name="submit">Create Role</button>
                </form>

                <form id="perm_create" class="todo" style="display:none">
                    <input id="perm_name" type="text" name="perm_name" placeholder="Enter a permission name" value=""/>
                    <input id="display" type="text" name="display" placeholder="Enter a display name" value=""/>
                    <input id="desc" type="text" name="desc" placeholder="Enter a description" value=""/>
                    <button name="submit">Create Permission</button>
                </form>

                <form id="roles_perms" class="todo" style="display:none">
                    <input id="role" type="text" name="role" placeholder="Enter a role name" value=""/>
                    <input id="perm" type="text" name="perm" placeholder="Enter a permission name" value=""/>
                    <button name="submit">Update Permissions</button>
                </form>

                <form id="tag_create" class="todo" style="display:none">
                    <input id="tag_name" type="text" name="tag_name" placeholder="Enter a tag name" value=""/>
                    <button name="submit">Create Tag</button>
                </form>

            </section>
        </div>

    @stop

    <script src="http://code.jquery.com/jquery-latest.min.js"type="text/javascript"></script>
    <script src="/js/admin.js"type="text/javascript"></script>
</html>