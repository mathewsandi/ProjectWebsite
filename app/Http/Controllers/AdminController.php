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
        if ($user->hasRole('admin' or 'super_admin')) {
            return view('admin.panel');
        }
    }

    public function createRole(Request $request)
    {
        $role = new Role(Input::all());
        $role->save();

        return redirect('/admin');
    }

    public function createPermission()
    {
        $permission = new Permission(Input::all());
        $permission->save();

        return redirect('/admin');
    }

    public function createTag()
    {
        $tag = new Tag(Input::all());
        $tag->save();

        return redirect('/admin');
    }

    public function editUser()
    {
        $user = User::where('username' == Input::get('username'))->first();
        $role = Role::where('name' == Input::get('name'));

        $user->assignRole($role);

        return redirect('/admin');
    }
}