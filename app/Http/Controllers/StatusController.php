<?php
/**
 * Created by PhpStorm.
 * User: mjames
 * Date: 30/11/2015
 * Time: 09:27
 */

namespace App\Http\Controllers;

use App\User;
use App\friends_user;
use Gate;
use App\Tag;
use App\Status;
use App\Http\Requests;
use App\Http\Requests\StatusRequest;
use Illuminate\Support\Facades\Auth;
use DB;
use Illuminate\Support\Facades\Mail;

class StatusController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        if(Auth::user()->active == "1") {
            $friends = array();
            $status_count = Auth::user()->statuses->count();
            $user_id = Auth::user()->id;
            $friend_id = friends_user::where('user_id', $user_id)->get(['friend_id']);
            foreach ($friend_id as $value) {
                array_push($friends, $value->friend_id);
            }
            $statuses = Status::whereIn('user_id', $friends)->orWhere('user_id', $user_id)->orderBy('created_at', 'DESC')->Paginate(10);

            return view('statuses.index', compact('statuses', 'status_count', 'friend_id'));
        }
        else{
            session()->flash('flash_message_important', 'Your account has been disabled!');
            return view('disable.disabled');
        }
    }

    public function store(StatusRequest $request)
    {
        $user = Auth::user();
        if($user->statuses->count() < 1)
        {
            $this->welcome($user);
            $points = $user->points;
            $user->points = $points + 2;
            $user->save();
        }
        $status = new Status($request->all());
        $status->user_id = $user->id;
        $status->save();

        session()->flash('flash_message', 'Status Posted!');
        return redirect('/statuses');
    }

    public function sendTo($user, $subject, $view, $data = [])
    {
        Mail::send($view, $data, function($message) use($user, $subject)
        {
            $message->to($user->email)
                ->subject($subject);
        });
    }
    public function welcome(User $user)
    {
        $view = 'emails.firststatus';
        $data = [];
        $subject = 'You posted your first status!';

        return $this->sendTo($user, $subject, $view, $data);
    }
}