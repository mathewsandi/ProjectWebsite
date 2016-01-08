<?php
/**
 * Created by PhpStorm.
 * User: mjames
 * Date: 07/01/2016
 * Time: 11:49
 */

namespace app\Http\Controllers;


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

class NewAdminController extends Controller
{
    public function getIndex()
    {
        $user = Auth::user();
        if ($user->hasRole('admin')) {
            if(Auth::user()->active == "1") {
                $userCount = DB::table('users')->count();

                return view('newadmin.admin')->with('userCount', $userCount)->with('users', User::orderBy('active')->get());
            }else{
                session()->flash('flash_message_important', 'Your account has been disabled!');
                return view('disable.disabled');
            }
        }
    }

    public function disableUser($id){
        if(Request::ajax()){
            $user = User::find($id);
            $user->active = 0;
            $user->save();
            return "OK";
        }
    }

    public function enableUser($id){
        if(Request::ajax()){
            $user = User::find($id);
            $user->active = 1;
            $user->save();
            return "OK";
        }
    }

    public function updateRoles()
    {
        if(Request::ajax()){
            $user = User::where('username', Input::get('username'))->first();
            $role = Role::where('name', Input::get('rolename'))->first();

            $user->assignRole($role);
            return "OK";
        }
    }

    public function createRoles(){
        if(Request::ajax()){

            $role = new Role();
            $role->name = Input::get('rolename');
            $role->display_name = Input::get('display_name');
            $role->description = Input::get('description');
            $role->save();
            return "OK";
        }
    }

    public function createPerm(){
        if(Request::ajax()){
            $perm = new Permission();
            $perm->name = Input::get('perm_name');
            $perm->display_name = Input::get('display');
            $perm->description = Input::get('desc');
            $perm->save();
        }
    }

    public function updatePerm(){
        if(Request::ajax()){
            $perm = Permission::where('name', Input::get('perm'))->first();
            $role = Role::where('name', Input::get('role'))->first();

            $role->assignPermission($perm);
        }
    }

    public function createTag(){
        if(Request::ajax()){
            $tag = new Tag();
            $tag->name = Input::get('tag');
            $tag->save();
        }
    }
}