<?php
/**
 * Created by PhpStorm.
 * User: mjames
 * Date: 30/11/2015
 * Time: 09:27
 */

namespace App\Http\Controllers;

use App\User;
use Gate;
use App\Tag;
use App\Status;
use App\Http\Requests;
use App\Http\Requests\StatusRequest;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\Auth;
use DB;
use Illuminate\Support\Facades\Request;

class StatusController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $status_count = Auth::user()->statuses->count();
        $statuses = Status::latest()->get();

        return view('statuses.index', compact('statuses', 'status_count', 'friends'));
    }

    public function store(StatusRequest $request)
    {
        $user = Auth::user();
        $status = new Status($request->all());
        $status->user_id = $user->id;
        $status->save();

        session()->flash('flash_message', 'Status Posted!');
        return redirect('/statuses');
    }
}