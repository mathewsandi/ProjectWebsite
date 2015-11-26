<?php
/**
 * Created by PhpStorm.
 * User: mjames
 * Date: 26/11/2015
 * Time: 13:47
 */

namespace app\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
Use App\User;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        If (Auth::check()){
            $username = Auth::user()->username;
            $email = Auth::user()->email;
            $articlecount = Auth::user()->articles()->count();
            $user_id = Auth::id();
            $user = Auth::user();

            return view('profile.profile', compact('username', 'email', 'articlecount', 'user_id', 'user'));
        }
    }

    public function show($id)
    {
        $user = User::findOrFail($id);
        $articles = $user->articles;

        return view('profile.profileshow', compact('user', 'articles'));
    }

    public function update(Request $request, $user_id)
    {
        $user = User::find($user_id);

        $user->username = $request->get('username');
        $user->email = $request->get('email');
        $user->save();
        session()->flash('flash_message', 'You have updated your profile!');
        return redirect('/profile');
    }

    public function articles()
    {
        if (Auth::check()){
            $username = Auth::user()->username;
            $email = Auth::user()->email;
            $user_id = Auth::id();
            $articles = Auth::user()->articles;

            return view('profile.profilearticles', compact('username', 'email', 'user_id', 'articles'));
        }
    }
}