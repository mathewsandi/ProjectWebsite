<?php
/**
 * Created by PhpStorm.
 * User: mjames
 * Date: 27/11/2015
 * Time: 11:10
 */

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;
use App\Http\Requests\CreateRoleRequest;
use App\Http\Requests\CreatePermissionRequest;
use App\Http\Requests\CreateTagRequest;
use App\Http\Requests\CreateUserRoleRequest;
use App\Http\Requests\EditRoleRequest;
use App\Http\Requests;
use App\User;
use App\Role;
use App\Tag;
use App\Permission;
use Illuminate\Support\Facades\Input;
use DB;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $user = Auth::user();
        if ($user->hasRole('admin')) {
            return view('admin.panel');
        }
    }

    public function createRole(CreateRoleRequest $request)
    {
        $role = new Role(Input::all());
        $role->save();

        return redirect('/admin');
    }

    public function createPermission(CreatePermissionRequest $request)
    {
        $permission = new Permission(Input::all());
        $permission->save();

        return redirect('/admin');
    }

    public function createTag(CreateTagRequest $request)
    {
        $tag = new Tag(Input::all());
        $tag->save();

        return redirect('/admin');
    }

    public function editUser(CreateUserRoleRequest $request)
    {
        $user = Auth::user();

        if($user->can('update-user'))
        {
            $user = User::where('username', Input::get('username'))->first();
            $role = Role::where('name', Input::get('name'))->first();

            $user->assignRole($role);
            return redirect('/admin');
        }
        else
        {
            session()->flash('flash_message_important', 'You are not permitted to do that!');
            return redirect('/admin');
        }

    }
    public function editRole(EditRoleRequest $request)
    {
        $user = Auth::user();

        if($user->can('update-roles'))
        {
            $role = Role::where('name', Input::get('rolename'))->first();
            $perm = Permission::where('name', Input::get('name'))->first();

            $role->assignPermission($perm);
            return redirect('/admin');
        }
        else
        {
            session()->flash('flash_message_important', 'You are not permitted to do that!');
            return redirect('/admin');
        }

    }
}