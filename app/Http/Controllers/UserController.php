<?php
/**
 * Created by PhpStorm.
 * User: mjames
 * Date: 30/11/2015
 * Time: 13:17
 */

namespace app\Http\Controllers;

use App\User;
use Auth;
use App\Http\Requests;
use App\Http\Requests\SendApplicationRequest;
use App\Http\Requests\SendVideoRequest;
use DB;
use Illuminate\Support\Facades\Mail;
use Validator;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        if(Auth::user()->active == "1") {
            $not_friends = User::where('id', '!=', Auth::user()->id);
            if (Auth::user()->friends->count()) {
                $not_friends->whereNotIn('id', Auth::user()->friends->modelKeys());
            }
            $not_friends = $not_friends->get();
            $users = User::orderBy('id', 'ASC')->get();
            return view('users', compact('users'))->with('not_friends', $not_friends);
        }else{
            session()->flash('flash_message_important', 'Your account has been disabled!');
            return view('disable.disabled');
        }
    }

    public function apply(SendApplicationRequest $request)
    {
            Mail::send('emails.applicationsend',
                array(
                    'name' => $request->get('name'),
                    'age' => $request->get('age'),
                    'email' => $request->get('email'),
                    'position' => $request->get('position'),
                    'experience' => $request->get('experience'),
                    'why' => $request->get('why'),
                    'what' => $request->get('what'),
                ), function($message)
            {
                $message->from('apply@Sezgi.com', 'Application Form');
                $message->to('SezgiOfficial@hotmail.com')->subject('Application Form');
            });

            session()->flash('flash_message', 'Successfully submitted application! You will be contacted by email with a response!');
            return redirect('/sezgicraft');
    }

    public function video(SendVideoRequest $request)
    {
        Mail::send('emails.video',
            array(
                'name' => $request->get('name'),
                'email' => $request->get('email'),
                'link' => $request->get('link'),
                'desc' => $request->get('desc')
            ), function($message)
            {
                $message->from('video@Sezgi.com', 'Video Form');
                $message->to('SezgiOfficial@hotmail.com')->subject('Application Form');
            });

        session()->flash('flash_message', 'Successfully submitted application! You will be contacted by email with a response!');
        return redirect('/sezgicraft');
    }

}