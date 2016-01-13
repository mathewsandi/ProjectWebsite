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

                $query = Input::get('q');

                $users = $query
                    ? User::where('username', 'LIKE', "%$query%")->orderBy('active')->get()
                    : User::orderBy('active')->get();

                return view('newadmin.admin', compact('userCount', 'users'));
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

            if($user === null)
            {
                return "DENIED";
            }elseif($role === null) {
                return "DENIED";
            }else {
                $user->assignRole($role);
                return "OK";
            }
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

            if($perm === null){
                return "DENIED";
            }elseif($role === null) {
                return "DENIED";
            }else {
                $role->assignPermission($perm);
                return "OK";
            }
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