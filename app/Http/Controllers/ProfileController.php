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
        If (Auth::check()) {
            $username = Auth::user()->username;
            $email = Auth::user()->email;
            $articlecount = Auth::user()->articles()->count();
            $location = Auth::user()->location;
            $minecraft = Auth::user()->minecraft;
            $twitch = Auth::user()->twitch;
            $youtube = Auth::user()->youtube;
            $skype = Auth::user()->skype;
            $about = Auth::user()->about;
            $user_id = Auth::id();
            $user = Auth::user();

            return view('profile.profile', compact('username', 'email', 'articlecount', 'user_id', 'user', 'location',
                'minecraft', 'twitch', 'youtube', 'about', 'skype'));
        }
    }

    public function show($id)
    {
        $user = User::findOrFail($id);
        $articles = $user->articles;
        $location = $user->location;
        $minecraft = $user->minecraft;
        $twitch = $user->twitch;
        $youtube = $user->youtube;
        $skype = $user->skype;
        $about = $user->about;

        return view('profile.profileshow', compact('username', 'email', 'articles', 'user_id', 'user', 'location',
            'minecraft', 'twitch', 'youtube', 'about', 'skype'));
    }

    public function edit(Request $request)
    {
        If (Auth::check()) {
            $username = Auth::user()->username;
            $email = Auth::user()->email;
            $articlecount = Auth::user()->articles()->count();
            $user_id = Auth::id();
            $user = Auth::user();

            return view('profile.editprofile', compact('username', 'email', 'articlecount', 'user_id', 'user'));
        }
    }

    public function update(Request $request, $user_id)
    {
        $user = User::find($user_id);

        $user->username = $request->get('username');
        $user->email = $request->get('email');
        $user->location = $request->get('location');
        $user->minecraft = $request->get('minecraft');
        $user->youtube = $request->get('youtube');
        $user->twitch = $request->get('twitch');
        $user->skype = $request->get('skype');
        $user->about = $request->get('about');
        $user->save();
        session()->flash('flash_message', 'You have updated your profile!');
        return redirect('/profile');
    }

    public function articles()
    {
        if (Auth::check()) {
            $username = Auth::user()->username;
            $email = Auth::user()->email;
            $user_id = Auth::id();
            $articles = Auth::user()->articles;

            return view('profile.profilearticles', compact('username', 'email', 'user_id', 'articles'));
        }
    }
}