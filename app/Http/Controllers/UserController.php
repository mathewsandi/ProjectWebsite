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
        $not_friends = User::where('id', '!=', Auth::user()->id);
        if (Auth::user()->friends->count()) {
            $not_friends->whereNotIn('id', Auth::user()->friends->modelKeys());
        }
        $not_friends = $not_friends->get();
        $users = User::orderBy('id', 'ASC')->get();
        return view('users', compact('users'))->with('not_friends', $not_friends);
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
                $message->to('mattjames_95@outlook.com', 'Matt')->subject('Application Form');
            });

            session()->flash('flash_message', 'Successfully submitted application! You will be contacted by email with a response!');
            return redirect('/');
    }


}