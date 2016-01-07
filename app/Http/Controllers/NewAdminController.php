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
    public $restful = true;

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
}